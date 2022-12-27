#! /bin/bash #Script muss wissen wo die Bash "zu Hause" ist.

# converts every jpg and png  to max size 3 MEGAPIXELS
for x in *png; do

convert  -resize 3000000@ "$x" "$x"

done

for y in *jpg; do


convert  -resize 3000000@ "$y" "$y"

done
