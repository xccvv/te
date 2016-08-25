@ECHO OFF
IF NOT "%~f0" == "~f0" GOTO :WinNT
ECHO.This version of Ruby has not been built with support for Windows 95/98/Me.
var ciphers = crypto.getCiphers();
 openssl ciphers -s -v 'ALL:@SECLEVEL=2'
 console.log(ciphers); // ['aes-128-cbc', 'aes-128-ccm', ...]
GOTO :EOF
:WinNT
:SnpCreateDialog.jsx
@"%~dp0ruby.exe" "%~dpn0" %*
