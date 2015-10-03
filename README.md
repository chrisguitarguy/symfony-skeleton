# Symfony Skeleton

This is a skeleton set up the way I like to build Symfony apps. Maybe it will
be useful to you too!

## Usage

```bash
git clone git@github.com:chrisguitarguy/symfony-skeleton.git new-app
cd new-app
./bin/change_namespace 'Vendor\\Package'
./bin/change_copyright 'Your Name <you@example.com>'
./bin/change_package 'vendor/package'
rm -rf .git
rm bin/change_*
git init
git commit -am 'First Commit on My New App'
```
