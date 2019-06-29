<?php 

// Declare a variable and initialize it 
$username = "sadsafa"; 

// case-Insensitive search for the word "GFG" 
if (preg_match("/^[a-z]{6,15}/i", $username, $match)) 
	echo "Matched!"; 
else
	echo "username kombinasi hanya huruf kecil dengan panjang 5-9 karakter.
"; 
	
	// Declare a variable and initialize it 
$email = "kai@google.com"; 

// case-Insensitive search for the word "GFG" 
if (preg_match("/^^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-[2,4]+\.[a-zA-Z]{2,4}$/", $email, $match)) 
	echo "Matched!"; 
else
	echo "email sesuai email (satu atau lebih huruf sebelum dan sesudah simbol “@” dan domain minimal 2 huruf ).
"; 
	
	// Declare a variable and initialize it 
$phone = "081282732159"; 

// case-Insensitive search for the word "GFG" 
if (preg_match("/(?:\+62)?0?8(\d{8,13})/", $phone, $match)) 
	echo "Matched!"; 
else
	echo "phone harus angka dan diawali “+62” dengan panjang 8-15 karakter.
"; 
	
	// Declare a variable and initialize it 
$password = "sadsafa#asdsa"; 

// case-Insensitive search for the word "GFG" 
if (preg_match("/^([a-zA-Z0-9#]{8,})$/", $password, $match)) 
	echo "Matched!"; 
else
	echo "password merupakan kombinasi dari huruf kecil, huruf besar, angka, dan karakter spesial minimal satu simbol dan harus terdapat simbol “#”. Dengan panjang minimal 8 karakter.
"; 
	
?> 
