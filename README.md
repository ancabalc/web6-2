## How to ignore changed files (temporarily)

### In order to ignore changed files to being listed as modified, you can use the following git command:
git update-index --assume-unchanged [<file> ...]

### To revert that ignorance use the following command:
git update-index --no-assume-unchanged [<file> ...]