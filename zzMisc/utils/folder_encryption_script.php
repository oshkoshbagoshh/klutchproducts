<?php

class FolderEncryptor
{
    private $source;
    private $destination;
    private $password;
    private $errors = [];

    /**
     * Constructor
     *
     * @param  string  $source  Source folder/file path
     * @param  string  $destination  Destination zip path
     * @param  string|null  $password  Password for encryption (optional)
     */
    public function __construct($source = null, $destination = null, $password = null)
    {
        $this->source = $source;
        $this->destination = $destination;
        $this->password = $password;
    }

    /**
     * Generate a random passwordinclude 'Folder Encryption Script (PHP).code.php';

     *
     * @param  int  $length  Password length
     * @return string
     */
    public function generatePassword($length = 16)
    {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=';
        $password = '';

        for ($i = 0; $i < $length; $i++) {
            $password .= $chars[random_int(0, strlen($chars) - 1)];
        }

        return $password;
    }

    /**
     * Validate input parameters
     *
     * @return bool
     */
    private function validate()
    {
        if (empty($this->source)) {
            $this->errors[] = 'Source path is required';

            return false;
        }

        if (! file_exists($this->source)) {
            $this->errors[] = 'Source path does not exist';

            return false;
        }

        if (empty($this->destination)) {
            $this->destination = dirname($this->source).'/'.
                basename($this->source).'_encrypted.zip';
        }

        if (empty($this->password)) {
            $this->password = $this->generatePassword();
            echo 'Generated password: '.$this->password."\n";
            echo "IMPORTANT: Save this password! You'll need it to decrypt the folder.\n";
        }

        return true;
    }

    /**
     * Encrypt a folder
     *
     * @return bool
     */
    public function encrypt()
    {
        if (! $this->validate()) {
            return false;
        }

        $zip = new ZipArchive;

        if ($zip->open($this->destination, ZipArchive::CREATE) !== true) {
            $this->errors[] = 'Cannot create zip file';

            return false;
        }

        // Set password for the zip file
        $zip->setPassword($this->password);

        $source = str_replace('\\', '/', realpath($this->source));

        if (is_dir($this->source)) {
            $iterator = new RecursiveDirectoryIterator($this->source);
            $files = new RecursiveIteratorIterator($iterator);

            foreach ($files as $file) {
                if (! $file->isDir()) {
                    $filePath = str_replace('\\', '/', $file->getRealPath());
                    $relativePath = substr($filePath, strlen($source) + 1);

                    // Add file to zip with encryption
                    $zip->addFile($filePath, $relativePath);
                    // Enable encryption for this file
                    $zip->setEncryptionName($relativePath, ZipArchive::EM_AES_256);
                }
            }
        } else {
            $zip->addFile($this->source, basename($this->source));
            $zip->setEncryptionName(basename($this->source), ZipArchive::EM_AES_256);
        }

        $zip->close();

        return true;
    }

    /**
     * Decrypt a zip file
     *
     * @param  string  $zipFile  Path to encrypted zip file
     * @param  string  $extractPath  Path to extract files
     * @param  string  $password  Password to decrypt
     * @return bool
     */
    public function decrypt($zipFile, $extractPath, $password)
    {
        if (! file_exists($zipFile)) {
            $this->errors[] = 'Encrypted file does not exist';

            return false;
        }

        $zip = new ZipArchive;

        if ($zip->open($zipFile) !== true) {
            $this->errors[] = 'Cannot open encrypted file';

            return false;
        }

        // Set password for decryption
        $zip->setPassword($password);

        // Create extraction directory if it doesn't exist
        if (! is_dir($extractPath)) {
            mkdir($extractPath, 0777, true);
        }

        // Extract the files
        if (! $zip->extractTo($extractPath)) {
            $this->errors[] = 'Decryption failed. Wrong password?';
            $zip->close();

            return false;
        }

        $zip->close();

        return true;
    }

    /**
     * Get any errors that occurred
     *
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }
}

// Usage Example
if (php_sapi_name() === 'cli') {
    // Command line usage
    if ($argc < 2) {
        echo "Usage:\n";
        echo 'Encrypt: php '.$argv[0]." encrypt <source_folder> [destination_zip] [password]\n";
        echo 'Decrypt: php '.$argv[0]." decrypt <encrypted_zip> <extract_path> <password>\n";
        exit(1);
    }

    $action = $argv[1];

    if ($action === 'encrypt') {
        $source = $argv[2] ?? null;
        $destination = $argv[3] ?? null;
        $password = $argv[4] ?? null;

        $encryptor = new FolderEncryptor($source, $destination, $password);

        if ($encryptor->encrypt()) {
            echo "Folder encrypted successfully!\n";
            echo 'Encrypted file: '.$encryptor->$destination."\n";
        } else {
            echo "Encryption failed:\n";
            print_r($encryptor->getErrors());
        }
    } elseif ($action === 'decrypt') {
        if ($argc < 5) {
            echo "Decrypt requires zip file, extract path, and password\n";
            exit(1);
        }

        $zipFile = $argv[2];
        $extractPath = $argv[3];
        $password = $argv[4];

        $encryptor = new FolderEncryptor;

        if ($encryptor->decrypt($zipFile, $extractPath, $password)) {
            echo "Files decrypted successfully!\n";
            echo 'Extracted to: '.$extractPath."\n";
        } else {
            echo "Decryption failed:\n";
            print_r($encryptor->getErrors());
        }
    } else {
        echo "Invalid action. Use 'encrypt' or 'decrypt'\n";
    }
}
