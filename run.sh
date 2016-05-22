#!/bin/sh
php app/console server:run &
xdg-open http://127.0.0.1:8000