#!/bin/bash

# Define the base URL of your Laravel application
BASE_URL="http://localhost:8000"  # Change this to your actual base URL

# Function to make a curl request and display results
check_route() {
    local route=$1
    local name=$2
    echo "Checking route: $name ($route)"
    response=$(curl -sS -w "\nStatus: %{http_code}" "$BASE_URL$route")
    status_code=$(echo "$response" | tail -n1 | cut -d' ' -f2)
    body=$(echo "$response" | sed '$d' | head -n 20)  # First 20 lines of the body

    echo "Status: $status_code"
    echo "Response (first 20 lines):"
    echo "$body"
    echo "----------------------------------------"
}

# Check each route
check_route "/" "home.index"
check_route "/about" "home.about"
check_route "/products" "product.index"
check_route "/products/1" "product.show"  # Assuming there's a product with ID 1

echo "Route checking completed."
