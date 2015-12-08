#!/bin/bash

php app/console cache:clear
chmod -R 777 app/cache
