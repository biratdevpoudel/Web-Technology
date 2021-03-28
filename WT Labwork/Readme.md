Lab 5.

Question 1: Program to alter visibility of an image in HTML document using Js We can alter visibility of an image in HTML document by using CSS property, either by visibility: or by display: .

CSS Visibility The visibility property specifies whether or not an element is visible. It has couple of values that we can use.

Value Description visible The element is visible. hidden The element is hidden (but still takes up space). CSS Display The display property specifies the display behavior (the type of rendering box) of an element. It also has couply of values.

Value Description none The element is completely removed. block Displays an element as a block element (like " " tag). It starts on a new line, and takes up the whole width.

Question 2: Program to illustrate element positioning and Stacking using Js For element positioning we have CSS position property. The position property specifies the type of positioning method used for an element. We have couple of position values:

static relative fixed absolute sticky Static HTML elements are positioned static by default. Static positioned elements are not affected by the top, bottom, left, and right properties.

Relative An element with position: relative; is positioned relative to its normal position. Setting the top, right, bottom, and left properties of a relatively-positioned element will cause it to be adjusted away from its normal position. Other content will not be adjusted to fit into any gap left by the element.

For stacking images we have CSS z-Index property. The z-index property specifies the stack order of an element. An element with greater stack order is always in front of an element with a lower stack order.

z-index: 0 or 1; 

Question 3: Program to illustrate drag and drop element using Js For implementing drag and drop using js we will have to use events (mousedown and mouseup in this case). This can be achieved by using addEventListener from js.

element.addEventListener(type, listener [, options]); When we register a Mouse Event we will be provided with clientX and clientY property. Using these two properties is the key to the anser for this question.

NOTE: clientX property returns the horizontal coordinate (according to the client area) of the mouse pointer when a mouse event was triggered and clientY returns the vertical coordinate. HINT: element.style.left = event.clientX + "px";

Question 4: Program to illustrate dynamic content using Js An webpage is known to be dynamic if the contents in that webpage changes as per the user input. By DOM Manipulation using JS this can be achieved.

Question 5: Program to illustrate from validation using Js There are many ways and many parts to validate a form. One simple way is to check whether the HTML Form fields are filled. DOM manipulation can be used to solve this too.


Lab6 | PHP.

Associative array:
Associative arrays are used to store key value pairs. The associative arrays are very similar to numeric arrays in term of functionality but they are different in terms of their index. Associative array will have their index as string so that you can establish a strong association between key and values.


Foreach Loop:
The foreach loop works only on arrays and objects, and is used to loop through each key/value pair in an array.


Array Functions:
The array functions allow you to access and manipulate arrays. Simple and multi-dimensional arrays are supported. Some array functions are given below:

array():	used to create a new array
array_pop():	deletes the last element of an array
array_push():	insert new element to the end of an array
sort():	sort the elements of the array in ascending alphabetical order
sizeof():	return the number of elements in an array


String Functions:
The string functions allows you to access and manipulate strings. Some string functions are:

echo():	outputs one or more strings
strcmp():	compares two strings
strlen():	returns the length of a string
substr():	returns a part of a string
trim():	removes predefined characters from a string


Array Sort:
Array sort = Sorts array in ascending alphabetical/numerical order. Some PHP Functions For Sorting Arrays are given below:

sort():	sort arrays in ascending order
rsort():	sort arrays in descending order
asort():	sort associative arrays in ascending order, according to the value
ksort():	sort associative arrays in ascending order, according to the key


Classes and Objects:

A class is a template for objects, and an object is an instance of class. A class is defined by using the class keyword, followed by the name of the class and a pair of curly braces ({}). All its properties and methods go inside the braces. We can create multiple objects from a class. Each object has all the properties and methods defined in the class, but they will have different property values. Objects of a class is created using the new keyword.


