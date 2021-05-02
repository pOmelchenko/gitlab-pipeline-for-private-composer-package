#!/bin/bash

# We need to install dependencies only for Docker
[[ ! -e /.dockerenv ]] && exit 0

set -xe

# Install git (the php image doesn't have it) which is required by composer
apt-get update -yqq
apt-get install git -yqq

if [[ -z "${XDEBUG}" ]]; then
    pecl install xdebug
fi

#get composer:
curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
