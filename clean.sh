#!/usr/bin/env bash
# clean env dev
rm -rf var/cache/*
php bin/console assets:install --symlink
php bin/console assetic:dump
chmod -R 777 var

# clean env prod
rm -rf var/cache/*
php bin/console assets:install web
php bin/console assetic:dump --env=prod --no-debug
chmod -R 777 var


