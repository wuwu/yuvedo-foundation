#!/bin/bash

# Copy nginx configuration
cp /home/site/app/bedrock/nginx.conf /etc/nginx/sites-enabled/default

# Reload nginx service
service nginx reload

# Check if nginx reload was successful
if [ $? -ne 0 ]; then
    echo "Failed to reload nginx service."
    exit 1
fi

echo "Nginx configuration updated successfully."
exit 0