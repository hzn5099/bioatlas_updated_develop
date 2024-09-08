# Upgrade

This file contains sections named after application versions with special
upgrade instructions. Don't skip versions. If there's no section named after
the version you're upgrading to, use the standard procedure described below.

## Unreleased

- You will need to copy over the thumbnails from the old rhel server to the new rhel9 servers
- Log into the old stage/prod bioatlas servers and copy the /data/thumbnails folder to the new rhel9 servers
- Run the ansible to fix permissions on the newly copies thumbnails


## [1.0.11] - 2024-05-15

- Run the ansible

## [1.0.10] - 2023-12-19

- Run the ansible

## [1.0.9] - 2023-12-06

- Before running the ansible you will need to copy the existing thumbnails into the new directory:
  - log into the server and run the following command:
    - mv -r /data/php/bioatlas/bioatlas/zfatlasDump/labels/thumbnails /data/php/thumbnails
- Run the ansible

## [1.0.8] - 2023-09-06

- Add the correct mellon settings to the ansible for production and stage environment
    For stage:
  - mellon_fqdn: bioatlas-stage.pennstatehealth.net
  - mellon_domain: pennstatehealth.net
- Run the ansible
- You will need to put the correct PSU WebSSO config in the /opt/rh/httpd24/root/etc/httpd/saml2 directory and verify that the
mellon conf file is using the correct files for PSU WebSSO.

## [1.0.7] - 2023-08-30

- Add the correct mellon settings to the ansible for production and stage environment
    For stage:
  - mellon_fqdn: bioatlas-stage.pennstatehealth.net
  - mellon_domain: pennstatehealth.net
- Run the ansible
- You will need to put the correct PSU WebSSO config in the /opt/rh/httpd24/root/etc/httpd/saml2 directory and verify that the
mellon conf file is using the correct files for PSU WebSSO.

## [1.0.6] - 2023-02-27

- Run the Gitlab CI Pipeline for the desired environment.

## [1.0.5] - 2020-12-21

- Run the ansible to install the latest bioatlas package
- bulk_upload and update_tables script instructions can be found in the [Slide-Upload][slide-upload] guide.

## [1.0.4] - 2020-12-02

- Run the ansible to install the latest bioatlas package
- bulk_upload and update_tables script instructions can be found in the [Slide-Upload][slide-upload] guide.

## [1.0.3] - 2020-05-12

- Run the ansible to install the ImageMagick and perl-forkmanager package.
- Install the libvips package: libvips is not available via yum so you will need
    to install it either via git or tar. Instructions for installing libvips can
    be found at <https://libvips.github.io/libvips/install.html>.
- You may receive requests to upload new slides into BioAtlas. You can use the
    scripts in bioatlas/zfatlasScripts/scripts to do this. In depth instructions
    can be found in the [Slide-Upload][slide-upload] guide.

## Standard procedure

- Build the application. You can download this from the GitLab artifacts or
    follow the build instructions in the [CONTRIBUTING][contributing] guide.

- Installing the package through Ansible:

    ```bash
    ansible-galaxy install -p roles -r requirements.yml -f -vvvv
    ansible-playbook -i <storename> site.yml --ask-become-pass --ask-vault-pass --ask-pass
    ```

- Installing the package manually: We recommend doing this through an RPM repo. If you've
    got your repo setup correctly, you should be able to yum install bioatlas.
    If you choose not to use a repo, you can install the package directly,
    e.g., `yum install bioatlas.rpm`.

[CONTRIBUTING.md]: CONTRIBUTING.md#build-process
[INSTALL.md]: INSTALL.md
[slide-upload]: docs/Slide-Upload.md
