#!/usr/bin/env bash

echo ">>> Setting up domain folder"

sudo vhost -s citygames.designosource.dev -d "vagrant/public"
