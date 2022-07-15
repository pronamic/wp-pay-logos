#!/bin/sh

rm -r docs/build

mkdir docs/build

php docs/index.php > docs/build/index.html
