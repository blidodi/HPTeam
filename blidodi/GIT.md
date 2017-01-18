git clone https://github.com/blidodi/HPTeam.git
cd HPTeam/
git init
git config --global user.name "<username>"
git config --global user.email "<your@email.com>"
mkdir <username>
touch <username>/README.md
git status
git add <username>
git add <username>/README.md
git commit -am "Add new directory <username>"
git push origin master