# The Let's Encrypt Plugin

https://docs.cpanel.net/knowledge-base/third-party/the-lets-encrypt-plugin/86/


The Let's Encrypt Plugin
Valid for version 86

Version:
82
84
86
88
Last modified: July 26, 2022

Overview
This plugin allows the AutoSSL feature to retrieve certificates from the Let’s Encrypt™ provider. You can use this plugin if you do not want to use cPanel’s default provider.

Let’s Encrypt can issue certificates faster than the cPanel (powered by Sectigo) default provider. It can also secure wildcard subdomains, which the default provider cannot do. However, unlike the cPanel default provider, Let’s Encrypt imposes rate and size limits on its issued certificates.

For more information, read our Manage AutoSSL documentation.

Note:
If you use the Let’s Encrypt plugin to issue wildcard certificates, be aware that there are limits:

This plugin does not currently secure non-wildcard domains via wildcard certificate. For example, it cannot secure the foo.example.com and bar.example.com subdomains with a *.example.com wildcard.

This plugin cannot use HTTP DCV challenges to issue wildcard certificates. Let’s Encrypt does not support this type of challenge. For more information, read Let’s Encrypt’s HTTP-01 challenge type documentation.

You cannot use this plugin to obtain wildcard certificates if you use third-party DNS hosting. You must host DNS on your local cPanel & WHM server or within the server’s DNS cluster.

Important:
Let’s Encrypt imposes significant rate and domain limits. You should review the rate limits before you select this provider. For more information, read our Guide to SSL documentation.
This plugin does not generate hostname certificates for your system’s services. It only generates SSL certificates for your cPanel accounts. For more information, read our Manage AutoSSL documentation.
Let’s Encrypt provides all future SSL and Wildcard SSL certificates when you select Let’s Encrypt as your default provider. For more information on generating SSL certificates, read our Generate an SSL Certificate and Signing Request documentation.
The Common Name (CN) entry of an SSL certificate is cosmetic and does not affect the security of a certificate.
An SSL certificate’s CN does not need to be the main domain. The certificate covers all domains listed in the certificate’s Subject Alternative Name (SAN) field.
Installation
To install the plugin, perform the following steps:

Log in to the server as the root user.

Run the following command:

/usr/local/cpanel/scripts/install_lets_encrypt_autossl_provider
Log in to WHM and navigate to the Manage AutoSSL interface (WHM >> Home >> SSL/TLS >> Manage AutoSSL).

In the Providers tab, select the Let’s Encrypt™ option. The interface will display the Terms of Service section.

Review Let’s Encrypt’s terms of service. If you agree, select the I agree to these terms of service option.

Click Save.

Update your registration
In the Manage AutoSSL interface, select the Recreate my current registration with “Let’s Encrypt™”. option after you accept the terms of service to update your provider registration. When you select this option, the system replaces your current registration with a new one.

Uninstall the plugin
To uninstall the plugin, perform the following steps:

Log in to the server as the root user.

Run the following command:

/usr/local/cpanel/scripts/uninstall_lets_encrypt_autossl_provider