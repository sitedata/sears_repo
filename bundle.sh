#!/bin/bash

# requires an argument specifying a directory
if [[ "$1" = "" ]]; then
  echo "Must specify a directory to bundle."
  exit
fi

# cd to the specified directory
cd "$1"
# make a subdirectory with the same name
mkdir "$1"

# recursively copy the image directory to the new dir
cp -R ./img "$1"
# copy all css files to the new dir
cp ./*.css "$1"
# copy all html files the new dir
cp ./*.html "$1"

if [[ -d ../Go-Live ]]
then
  echo "Go-Live directory already exists."
else
  mkdir ../Go-Live
fi

# zip the new directory into a zip file with (you guessed it) the same name
zip -r ../Go-Live/"$1".zip ./"$1"

# delete the new directory
rm -rf ./"$1"

# return to the parent directory
cd ..
