# To run this script directly, run this in an elevated admin PowerShell prompt:
#     Invoke-WebRequest -UseBasicParsing https://raw.githubusercontent.com/LearnWithLlew/DuplicationKata.php/main/install.windows.ps1 | Invoke-Expression

# This script is intended to setup a dev machine from scratch. Very useful for setting up a EC2 instance for mobbing.
#


iwr -useb https://raw.githubusercontent.com/JayBazuzi/machine-setup/main/windows.ps1 | iex
iwr -useb https://raw.githubusercontent.com/JayBazuzi/machine-setup/main/php_phpstorm.ps1 | iex


# Clone repo
& "C:\Program Files\Git\cmd\git.exe" clone https://github.com/LearnWithLlew/DuplicationKata.php.git C:\Code\DuplicationKata
# Done
cls
echo "Done!"
