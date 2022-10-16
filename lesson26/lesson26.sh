#!/bin/bash

mkdir ../../lesson26;

cd ../../lesson26;

git clone https://github.com/GritsayAndriy/robot_dreams.git;

cd robot_dreams/lesson26;

sudo chmod 777 logs;

cd public;

php -S localhost:8000;