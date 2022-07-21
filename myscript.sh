#!/usr/bin/bash
#https://medium.com/sysf/bash-scripting-everything-you-need-to-know-about-bash-shell-programming-cd08595f2fba
#https://gist.github.com/bradtraversy/ac3b1136fc7d739a788ad1e42a78b610

# ECHO COMMAND

# echo hello world

#variables -- uppercase by convention (letters , numbers and underscore)
AGE=41
NAME=jose
echo $AGE $NAME

#user input
# read -p "enter your name:" NOMBRE
# echo "HELLO $NOMBRE"
# NOMBRE =Brad
#SIMPLE IF STATEMENT
# if [ $NAME == Brad ]
# then
# echo "your name is brad"
# else 
#  echo "hello $NAME"
# fi

##else-if
# if [ $NAME == Brad ]
# then
# echo "your name is brad"
# elif [ "$NAME" == jose ]
# then
# echo "your name is jose"
# else 
# echo "your name is not brad or jose"
# fi


###if else if block
# MYVALUE=3;
# echo -n "enter a number"; read USER_VALUE
# if [ "$USER_VALUE " -gt "$MYVALUE"]
# then
# echo "$USER_VALUE is greater than $MYVALUE"
# else
# echo "you are not so great"
# fi

#COMPARISON -gt is greater than >
# NUM1=3
# NUM2=51

# if [ "$NUM1" -gt "$num2" ]
# then
# echo "$NUM1 is greater than $NUM2"
# else
# echo "$NUM1 is less than $NUM2"
# fi

#FILE CONDITIONS
# FILE="jose.txt"
# # FILE="exxx" if i use -e will be true

# if [ -f "$FILE" ]
# then
# echo "$FILE is a file"
# else
# echo "$FILE is not a file"
# fi

########
# -d file   True if the file is a directory
# -e file   True if the file exists (note that this is not particularly portable, thus -f is generally used)
# -f file   True if the provided string is a file
# -g file   True if the group id is set on a file
# -r file   True if the file is readable
# -s file   True if the file has a non-zero size
# -u    True if the user id is set on a file
# -w    True if the file is writable
# -x    True if the file is an executable
########


#CASE STATEMENT
# read -p "Are you 21 or over? Y/N " ANSWER
# case "$ANSWER" in
# [yY] | [yY][eE][sS])
# echo "you can have a beer :)"
# ;;
# [nN] | [nN][oO])
# echo "sorry , no drinking"
# ;;
# *)
# echo " please enter y/yes or n/no"
# ;;
# esac

### SIMPLE FOR LOOP
# NAMES="brad kevin alice mark"
# for NAME in $NAMES
#  do 
#    echo "HELLO $NAME"
# done

###FOR LOOP TO RENAME FILES
FILES=$(ls *.txt)
NEW="new"
for FILE in $FILES
 do
 echo "Rnaming $FILE to new-$FILE"
 mv $FILE $NEW=$FILE
 done
