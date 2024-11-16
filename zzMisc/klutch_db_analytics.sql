
/*
 * @Author: AJ Javadi 
 * @Email: amirjavadi25@gmail.com
 * @Date: 2024-05-08 10:47:18 
 * @Last Modified by: AJ Javadi
 * @Last Modified time: 2024-05-08 10:48:06
 * @Description: file:///Users/aj/Desktop/KLUTCH/SCPLAY/klutch_db_analytics.sql
 * Data analysis queries
 * TODO: turn into stored procedure 
 * Test out once you have dummy data 
 */

USE klutch_db;


-- 1)  TOP 5 BEST SELLING PRODUCTS
SELECT ProductName, ASIN, Category, EstSales
FROM Products
ORDER BY EstSales DESC
LIMIT 5;


-- 2)  Average Price and Net Margin by Category
SELECT Category, AVG(Price) AS AveragePrice, AVG (NetMargin) AS AverageNetMargin
FROM Products
GROUP BY Category;

-- 3) Products with Highest Customer Ratings
SELECT ProductName, ASIN, Rating, NumberOfReviews
FROM Products
WHERE Rating >= 4.5
ORDER BY Rating DESC, NumberOfReviews DESC;

-- 4)  New Products Added Since a Specific date
SELECT ProductName, ASIN, AvailableFrom
FROM Products
WHERE AvailableFrom > '2023-01-01' -- change this to the date you want
ORDER BY AvailableFrom;

-- 5) Products with Significant Price Drops

SELECT ProductName, ASIN, Price, MinPrice
FROM Products
WHERE Price > MinPrice AND ((Price - MinPrice) / Price) * 100 > 20
ORDER BY ((Price - MinPrice) / Price) * 100 DESC;

-- 6) High Inventory but Low Sales Products
SELECT ProductName, ASIN, Inventory, EstSales
FROM Products
WHERE Inventory > EstSales * 2
ORDER BY Inventory / EstSales DESC;


-- 7) TODO: Video Counts 

