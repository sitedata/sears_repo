#!/bin/bash

# parse arguments for base directory to bundle
# and optional sandbox image directory name
  for i in "$@"
  do
    case $i in
      -d=*|--dir=*)
      DIR="${i#*=}"
      shift # past argument=value
      ;;
      -i=*|--img-dir=*)
      IMG_TARGET_DIR="${i#*=}"
      shift # past argument=value
      ;;
      --default)
      DEFAULT=YES
      shift # past argument with no value
      ;;
      *)
            # unknown option
      ;;
    esac
  done


# requires an argument specifying a directory
if [[ "${DIR}" = "" ]]; then
  echo "Must specify a directory to bundle."
  exit
fi

# if no target directory for images specified, use "img"
if [[ "${IMG_TARGET_DIR}" = "" ]]; then
  IMG_TARGET="img"
fi

# assign to variable with more meaningful name
# DIR="${DIR}"

# make sure DIR exists!
if [[ ! -d "${DIR}" ]]; then
  echo "${DIR} does not exist. Aborting..."
  exit
fi

# cd to the specified directory
cd "${DIR}"
# make a subdirectory with the same name
mkdir "${DIR}"

# check for image multiple possible directory names
if [[ -d "./img" ]]; then
  IMG_SOURCE_DIR="./img"
elif [[ -d "./images" ]]; then
  IMG_SOURCE_DIR="./images"
else
  echo "Could not find image directory in ${DIR}. Aborting..."
  exit
fi

# recursively copy the image directory to the new dir
cp -R "${IMG_SOURCE_DIR}" "${DIR}/${IMG_TARGET_DIR}"
# actually we don't need CSS files in bundle
# copy all css files to the new dir
# cp ./*.css "${DIR}"
# copy all html files the new dir
cp ./*.html "${DIR}"

if [[ ! -d ../Go-Live ]]
then
  mkdir ../Go-Live
fi

# should we check for the zip file already existing?
if [[ -e ../Go-Live/"${DIR}".zip ]]; then
  echo "${DIR}.zip already exists. Deleting it before creating the new one."
  rm ../Go-Live/"${DIR}".zip
fi

# zip the new directory into a zip file with (you guessed it) the same name
zip -r ../Go-Live/"${DIR}".zip ./"${DIR}"

# delete the new directory
rm -rf ./"${DIR}"

# return to the parent directory
cd ..
