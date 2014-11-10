<?php

	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	$post = filter_input(INPUT_POST,"post", FILTER_SANITIZE_STRING);//it recevie information from the post and the title from the the filter input and it also sercer the blogs informations


	echo "<p>Title: $title</p>";
	echo "<p>Post: $post";