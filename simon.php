<?php
include ('header.php');
?>
<div style="z-index:1 ;" class="fixed-top nav2 text-center nav-green pr-1">À vous de jouer...</div>
<div class="win">T'es un gros champion, bravo !</div>
<audio>
    <source src="simon/sound4.mp3"></source>

</audio>
<svg id="plan" viewBox="0 0 600 600" style="background-color:#000000" version="1.1"
	xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"
	x="0px" y="0px" width="600px" height="600px"
>

	<path id="rouge" d="M 439 34 L 442 25 L 506 25 L 503 35 L 556 36 L 520 136 L 18 72 L 19.2138 33.4025 L 439 34 Z" fill="black"/>
	<path id="bleu" d="M 19 72 L 519 136 L 488 220 L 448 212 L 361 503 L 183 473 L 183 167 L 18 140 L 18 72.0693 L 19 72 Z" fill="black"/>
	<path id="jaune" d="M 228 218 L 392 245 L 338 483 L 202 462 L 228 218 Z" fill="black"/>
	<path id="violet" d="M 18 141 L 183 168 L 183 573 L 18 573 L 18 141 Z" fill="black"/>
	<path id="vert" d="M 447 214 L 557 232 L 557 274 L 568 275 L 583 304 L 557 304 L 557 573 L 340 573 L 447 214 Z" fill="black"/>
	<path class="erreurColor" id="Ligne" d="M 19.5 35.5 L 19.5 35.5 " stroke="#000000" stroke-width="1" fill="none"/>
	<path class="erreurColor" d="M 72.1744 78.7792 L 56.527 76.7843 " fill="#00f209"/>
	<path class="erreurColor" d="M 186.7349 90.3862 L 183 89.91 L 183 51 L 180 51 L 180 89.525 L 72.5953 75.8329 L 72.1744 78.7792 L 186.4028 93.3747 L 186.7349 90.3862 Z" fill="#00f209"/>
	<path class="erreurColor" d="M 421.9258 120.3712 L 196.8326 91.6736 L 196.5331 94.6691 L 421.3217 123.3914 L 421.9258 120.3712 Z" fill="#00f209"/>
	<path class="erreurColor" d="M 496 51 L 499 51 L 481 114 L 478 114 L 496 51 Z" fill="#00f209"/>
	<path class="erreurColor" d="M 441.1563 33 L 441.135 33 L 443 25 L 441 25 L 439.135 33 L 197 33 L 197 36 L 429 36 L 438.435 36 L 440.3125 36 L 441.1563 33 Z" fill="#00f209"/>
	<path class="erreurColor" d="M 501.6875 36 L 501.7 36 L 503.7 36 L 518 36 L 553.885 36 L 518.04 132.625 L 473.6227 126.9621 L 472.8452 129.9748 L 520 136 L 521 133 L 520.905 132.99 L 558 33 L 556 33 L 555 33 L 504.6 33 L 507 25 L 505 25 L 502.6 33 L 502.5875 33 L 501.6875 36 Z" fill="#00f209"/>
	<path class="erreurColor" d="M 181 33 L 18 33 L 18 35 L 18 36 L 18 72 L 19 72 L 56.527 76.7843 L 56.8961 73.8314 L 21 69.255 L 21 36 L 181 36 L 181 33 Z" fill="#00f209"/>
	<path class="erreurColor" d="M 496 51 L 499 51 L 481.3125 113.4657 L 478.3125 113.4657 L 496 51 Z" fill="#00f209"/>
	<path class="erreurColor" d="M 183 167.5 L 18 140 L 18 142 L 18 143 L 18 183 L 21 183 L 21 143.5 L 183 170.5 L 183 167.5 Z" fill="#00f209"/>
	<rect class="erreurColor" x="18" y="208" width="3" height="11" fill="#00f209"/>
	<rect class="erreurColor" x="18" y="244" width="3" height="11" fill="#00f209"/>
	<rect class="erreurColor" x="18" y="280" width="3" height="11" fill="#00f209"/>
	<rect class="erreurColor" x="18" y="316" width="3" height="11" fill="#00f209"/>
	<rect class="erreurColor" x="18" y="352" width="3" height="11" fill="#00f209"/>
	<rect class="erreurColor" x="18" y="388" width="3" height="11" fill="#00f209"/>
	<rect class="erreurColor" x="18" y="424" width="3" height="11" fill="#00f209"/>
	<rect class="erreurColor" x="18" y="460" width="3" height="11" fill="#00f209"/>
	<rect class="erreurColor" x="18" y="496" width="3" height="11" fill="#00f209"/>
	<rect class="erreurColor" x="18" y="532" width="3" height="11" fill="#00f209"/>
	<path class="erreurColor" d="M 18 566 L 18 573 L 20 573 L 21 573 L 101 573 L 101 570 L 21 570 L 21 566 L 18 566 Z" fill="#00f209"/>
	<path class="erreurColor" d="M 117 570 L 132 570 L 132 573 L 117 573 L 117 570 Z" fill="#00f209"/>
	<path class="erreurColor" d="M 149 570 L 159 570 L 159 573 L 149 573 L 149 570 Z" fill="#00f209"/>
	<path class="erreurColor" d="M 203 570 L 213 570 L 213 573 L 203 573 L 203 570 Z" fill="#00f209"/>
	<path class="erreurColor" d="M 274 570 L 285 570 L 285 573 L 274 573 L 274 570 Z" fill="#00f209"/>
	<path class="erreurColor" d="M 390 570 L 401 570 L 401 573 L 390 573 L 390 570 Z" fill="#00f209"/>
	<path class="erreurColor" d="M 417 570 L 428 570 L 428 573 L 417 573 L 417 570 Z" fill="#00f209"/>
	<path class="erreurColor" d="M 444 570 L 478 570 L 478 573 L 444 573 L 444 570 Z" fill="#00f209"/>
	<path class="erreurColor" d="M 492 570 L 526 570 L 526 573 L 492 573 L 492 570 Z" fill="#00f209"/>
	<path class="erreurColor" d="M 558.0156 274.4156 L 558 274.4 L 566 276 L 566 274 L 558 272.4 L 558 233 L 558 232 L 558 230 L 450.955 212.16 L 451 212 L 449.995 212 L 448 211.6667 L 447.1544 214.5257 L 447.24 214.54 L 441.7864 232.8083 L 444.5304 233.6657 L 450.1 215.015 L 555 232.5 L 555.0156 273.8156 L 558.0156 274.4156 Z" fill="#00f209"/>
	<path class="erreurColor" d="M 420.541 303.9557 L 437.9633 245.6113 L 440.6612 246.623 L 423.255 304.9135 L 420.541 303.9557 Z" fill="#00f209"/>
	<path class="erreurColor" d="M 336 570 L 336 573 L 374 573 L 374 570 L 344.095 570 L 362.6111 508 L 359.6111 508 L 341.095 570 L 336 570 Z" fill="#00f209"/>
	<path class="erreurColor" d="M 555 303 L 555 490 L 367.985 490 L 419.1415 318.6887 L 416.3838 317.8776 L 364.0903 493 L 366 493 L 367.0903 493 L 555 493 L 555 570 L 551 570 L 551 573 L 555 573 L 558 573 L 558 570 L 558 305 L 584 305 L 584 303 L 558 303 L 555 303 Z" fill="#00f209"/>
	<path class="erreurColor" d="M 247 570 L 247 573 L 258 573 L 258 570 L 253 570 L 253 524 L 250 524 L 250 570 L 247 570 Z" fill="#00f209"/>
	<path class="erreurColor" d="M 226 570 L 226 573 L 236 573 L 236 571 L 236 570 L 236 535 L 233 535 L 233 570 L 226 570 Z" fill="#00f209"/>
	<path class="erreurColor" d="M 300 570 L 300 573 L 321 573 L 321 570 L 317.58 570 L 334.1395 498.4168 L 330.5357 497.5852 L 278 488.55 L 278 491.545 L 278 491.715 L 278 512 L 253 512 L 253 487.49 L 269 490.195 L 269 487.2 L 233 481.12 L 233 483 L 233 484.115 L 233 526 L 236 526 L 236 484.62 L 250 486.985 L 250 515 L 252 515 L 253 515 L 278 515 L 278 572 L 281 572 L 281 492.22 L 330.635 500.605 L 314.58 570 L 300 570 ZM 181 472.334 L 179 472 L 119 462 L 119 465 L 180 475 L 180 570 L 176 570 L 176 573 L 186 573 L 186 570 L 183 570 L 183 475.505 L 222 482.26 L 222 479.26 L 181 472.334 Z" fill="#00f209"/>
	<path class="erreurColor" d="M 375.725 305.7 L 335.24 480.71 L 277.34 471.06 L 276.66 473.945 L 336.4755 483.9149 L 336.475 483.77 L 337.4761 483.9947 L 378.545 306.485 L 375.725 305.7 ZM 325.135 236.18 L 389.36 246.77 L 378.545 293.51 L 381.375 294.255 L 393 244 L 390.765 244 L 325.62 233.26 L 325.135 236.18 ZM 201.8651 458.4784 L 201.4606 461.411 L 262.51 471.585 L 263.19 468.7 L 205.335 459.055 L 229.75 220.455 L 292.045 230.725 L 292.53 227.805 L 227 217 L 227 218 L 202.385 458.565 L 201.8651 458.4784 Z" fill="#00f209"/>
	<path class="erreurColor" d="M 180 457.6364 L 180 186 L 183 186 L 183 458.1818 L 180 457.6364 Z" fill="#00f209"/>
	<path class="erreurColor" d="M 197 5 L 190 13 L 184 5 L 197 5 Z" fill="#00f209"/>
	<path class="erreurColor" d="M 103 594 L 110 586 L 116 594 L 103 594 Z" fill="#00f209"/>
	<path class="erreurColor" d="M 273 594 L 280 586 L 286 594 L 273 594 Z" fill="#00f209"/>
	<path class="erreurColor" d="M 322 594 L 329 586 L 335 594 L 322 594 Z" fill="#00f209"/>
	<path class="erreurColor" d="M 478 594 L 485 586 L 491 594 L 478 594 Z" fill="#00f209"/>
	<path class="erreurColor" d="M 532 594 L 539 586 L 545 594 L 532 594 Z" fill="#00f209"/>
	<path class="erreurColor" d="M 575 204 L 563 193.2308 L 575 184 L 575 204 Z" fill="#00f209"/>
	<path id="Ligne2" d="M 13.5 28.5 L 435.5 28.5 L 438 19 L 514 19 L 511 28 L 565 28 L 496 213 L 564 225 L 564 268 L 571 270 L 592 310 L 564 310 L 564 579 L 13 579 L 13.5 28.5 Z" stroke="#00f209" stroke-width="1" fill="none"/>
</svg>
<?php include('footer.php') ?>
<script src="js/simon.js"></script>
</body>
</html>
