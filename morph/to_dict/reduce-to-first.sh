#!/bin/bash
for file in `egrep -l '^[a-z].*[^_\t ]$' $*`; do
	# echo "<orig>"
	# cat $file  # | egrep -B 2 -A 2 -m 1 '^[a-z].*[^_\t ]$'
	# echo "</orig>"
	mv $file $file.bak
	cat $file.bak | \
	cut -f 1-4 | \
	# NB: preserve \r if originally used
	sed -e s/'^[a-z].*$'/'&\t_\t_\t_'/g \
		-e s/'^# ID.*$'/'&\tHEAD\tDEPREL\tMISC'/ \
		-e s/'\(.*\)\r\(.*\)'/'\1\2\r'/g	\
	> $file
	echo $file 1>&2
done
