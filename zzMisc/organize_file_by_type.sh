#!/bin/zsh

# Directories to create
dirs=(images docs audio videos archives)

# Loop through files
for f in *; do

  # Get file extension
  ext=${f##*.}

  case $ext in

    jpg|jpeg|png|gif)
      mv "$f" images/ ;;

    txt|md|pdf)
      mv "$f" docs/ ;;

    mp3|wav|ogg)
      mv "$f" audio/ ;;

    mp4|avi|mov)
      mv "$f" videos/ ;;

    zip|rar|tar|gz)
      mv "$f" archives/ ;;

    *)
      echo "Unknown file type: $f"
      ;;

  esac

done

# Create directories if they don't exist
for d in ${dirs[@]}; do
  [ -d $d ] || mkdir $d
done
