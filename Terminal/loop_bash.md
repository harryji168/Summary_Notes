# Loop through an array of strings in Bash?

2894

You can use it like this:
```sh
## declare an array variable
declare -a arr=("element1" "element2" "element3")

## now loop through the above array
for i in "${arr[@]}"
do
   echo "$i"
   # or do whatever with individual element of the array
done
```

# You can access them using echo "${arr[0]}", "${arr[1]}" also
Also works for multi-line array declaration
```
declare -a arr=("element1" 
                "element2" "element3"
                "element4"
                )
```       