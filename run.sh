#!/bin/sh
{
    sleep 1
    # xdg-open http://127.0.0.1:8000
} &
php app/console server:run &
php app/console websocket:run
