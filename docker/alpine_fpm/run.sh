#!/bin/bash

sudo docker run -d -p 8080:80 -v `pwd`/src:/var/www/html php5_env
