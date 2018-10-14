#!/bin/bash

sudo docker run -v `pwd`/src:/usr/src/myapp -it php5_env /bin/sh
