#!/bin/sh

rm -r docs/build

mkdir docs/build

rsync -zarv --include="*/" --include="*.svg" --exclude="*" dist/ docs/build/logos/
rsync -zarv docs/images/ docs/build/images/

php docs/index.php > docs/build/index.html
