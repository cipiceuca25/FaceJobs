#!/bin/bash
rsync -v --compress-level=9 --exclude '*.psd' --exclude '.git' -a  ./  root@vps.mupi.com.sv:/var/www/facejobs.org/
