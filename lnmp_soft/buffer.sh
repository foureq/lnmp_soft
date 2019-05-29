#!/bin/bash
URL=http://www.a.com/index.html?
for i in {1..5000}
do
	URL=${URL}v$i=$i
done
curl $URL
