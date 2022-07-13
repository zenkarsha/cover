<?php
class createImage {

  private $fontPath = '/../../font/jellyfish20140617.ttf';
	private $bannerWidth = 851;
	private $bannerHeigh = 315;
	private $fontSizeStyle1 = 50;
	private $fontSizeStyle2 = 20;
	private $fontRotation = 0;
	private $leftPadding = 50;
	private $fontPaddingTop = 100;

	function Create($template1, $template2, $template3, $something, $verb, $other, $colorbg, $color1, $color2, $sentence, $directpost)
  {
    include_once './system/function/systemFunction.php';
    include_once './system/extension/kxgenEmojis.php';

		//emoji text replace
		$something=str2img($something);
		$verb=str2img($verb);
		$other=str2img($other);

		//create banner image
		$image = imagecreate($this->bannerWidth, $this->bannerHeigh);

    //font path
    $font  = __DIR__ . $this->fontPath;

		$colorbg=hex2rgb($colorbg);
		$color1=hex2rgb($color1);
		$color2=hex2rgb($color2);

		$background = imagecolorallocate($image, $colorbg[0], $colorbg[1], $colorbg[2]);
		$fontcolor1 = imagecolorallocate($image, $color1[0], $color1[1], $color1[2]);
		$fontcolor2 = imagecolorallocate($image, $color2[0], $color2[1], $color2[2]);

		//create image by switch $sentence
		switch ($sentence) {
			case '1':
				//Create text string
				$text1 = $template1.$something.$template2.$verb;
				$text2 = $other;

				//text x
				$this->CaleTextStyle1($text1, $text2, $template1, $something, $template2, $x1, $x2, $x3, $x4);

				//draw
				imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 , ($this->bannerHeigh)/2, $fontcolor1, $font, $text1);
				imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 + $x3 + 8, ($this->bannerHeigh)/2, $fontcolor2, $font, $something);
				imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 + $x4 + 4, ($this->bannerHeigh)/2, $fontcolor2, $font, $verb);
				imagettftext($image, $this->fontSizeStyle2, $this->fontRotation, $x2, ($this->bannerHeigh + $this->fontPaddingTop)/2, $fontcolor1, $font, $text2);
				break;

			case '2':
				//Create text string
				$text1 = $template1.$something;
				$text2 = $other;

				//text x
				$this->CaleTextStyle2($text1, $text2, $template1, $x1, $x2, $x3);

				//draw
				imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 , ($this->bannerHeigh)/2, $fontcolor1, $font, $text1);
				imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 + $x3 - 1, ($this->bannerHeigh)/2, $fontcolor2, $font, $something);
				imagettftext($image, $this->fontSizeStyle2, $this->fontRotation, $x2, ($this->bannerHeigh + $this->fontPaddingTop)/2, $fontcolor1, $font, $text2);
				break;

			case '3':
				//Create text string
				$text1 = $template1.$something.$template2.$verb;
				$text2 = $other;

				//text x
				$this->CaleTextStyle1($text1, $text2, $template1, $something, $template2, $x1, $x2, $x3, $x4);

				//draw
				imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 , ($this->bannerHeigh)/2, $fontcolor1, $font, $text1);
        imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 + $x3 - 3, ($this->bannerHeigh)/2, $fontcolor2, $font, $something);
        imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 + $x3 - 2, ($this->bannerHeigh)/2, $fontcolor2, $font, $something);
        imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 + $x4 - 6, ($this->bannerHeigh)/2, $fontcolor2, $font, $verb);
        imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 + $x4 - 7, ($this->bannerHeigh)/2, $fontcolor2, $font, $verb);
				imagettftext($image, $this->fontSizeStyle2, $this->fontRotation, $x2, ($this->bannerHeigh + $this->fontPaddingTop)/2, $fontcolor1, $font, $text2);
				break;

			case '4':
				//Create text string
				$text1 = $template1.$something.$template2.$verb;
				$text2 = $other;

				//text x
				$this->CaleTextStyle1($text1, $text2, $template1, $something, $template2, $x1, $x2, $x3, $x4);

				//draw
				imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 , ($this->bannerHeigh)/2, $fontcolor1, $font, $text1);
        imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 + $x3 + 0, ($this->bannerHeigh)/2, $fontcolor2, $font, $something);
        imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 + $x3 + 1, ($this->bannerHeigh)/2, $fontcolor2, $font, $something);
        imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 + $x4 - 3, ($this->bannerHeigh)/2, $fontcolor2, $font, $verb);
        imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 + $x4 - 2, ($this->bannerHeigh)/2, $fontcolor2, $font, $verb);
				imagettftext($image, $this->fontSizeStyle2, $this->fontRotation, $x2, ($this->bannerHeigh + $this->fontPaddingTop)/2, $fontcolor1, $font, $text2);
				break;

			case '5':
				//Create text string
				$text1 = $template1.$something;
				$text2 = $other;

				//text x
				$this->CaleTextStyle2($text1, $text2, $template1, $x1, $x2, $x3);

				//draw
				imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 , ($this->bannerHeigh)/2, $fontcolor1, $font, $text1);
				imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 + $x3 +1, ($this->bannerHeigh)/2, $fontcolor2, $font, $something);
				imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 + $x3 +0, ($this->bannerHeigh)/2, $fontcolor2, $font, $something);
				imagettftext($image, $this->fontSizeStyle2, $this->fontRotation, $x2, ($this->bannerHeigh + $this->fontPaddingTop)/2, $fontcolor1, $font, $text2);
				break;

			case '6':
				//Create text string
				$this->templateText3 = $template3;
				$text1 = $template1.$something.$template2.$verb.$this->templateText3;
				$text2 = $other;

				//font size
				$this->fontSizeStyle1 = 40;

				//text x
				$this->CaleTextStyle1($text1, $text2, $template1, $something, $template2, $x1, $x2, $x3, $x4);

				//draw
				imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 , ($this->bannerHeigh)/2, $fontcolor1, $font, $text1);
				imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 + $x3 - 0, ($this->bannerHeigh)/2, $fontcolor2, $font, $something);
				imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 + $x4 - 2, ($this->bannerHeigh)/2, $fontcolor2, $font, $verb);
				imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 + $x4 - 3, ($this->bannerHeigh)/2, $fontcolor2, $font, $verb);
				imagettftext($image, $this->fontSizeStyle2, $this->fontRotation, $x2, ($this->bannerHeigh + $this->fontPaddingTop)/2, $fontcolor1, $font, $text2);
				break;

			case '7':
				//Create text string
				$text1 = $template1.$something.$template2.$verb;
				$text2 = $other;

				//font size
				$this->fontSizeStyle1 = 40;

				//text x
				$this->CaleTextStyle1($text1, $text2, $template1, $something, $template2, $x1, $x2, $x3, $x4);

				//draw
				imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 , ($this->bannerHeigh)/2, $fontcolor1, $font, $text1);
        imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 + $x3 + 0, ($this->bannerHeigh)/2, $fontcolor2, $font, $something);
        imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 + $x3 - 1, ($this->bannerHeigh)/2, $fontcolor2, $font, $something);
        imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 + $x4 - 3, ($this->bannerHeigh)/2, $fontcolor2, $font, $verb);
        imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 + $x4 - 4, ($this->bannerHeigh)/2, $fontcolor2, $font, $verb);
				imagettftext($image, $this->fontSizeStyle2, $this->fontRotation, $x2, ($this->bannerHeigh + $this->fontPaddingTop)/2, $fontcolor1, $font, $text2);
				break;


			case '8':
        //Create text string
        $text1 = $template1.$something.$template2.$verb;
        $text2 = $other;

        //font size
        $fontsize1 = 45;
        $fontsize2 = 30;
        // print_r($this->stringDimension($text1,$fontsize1,$font));
        $text1_x = ($this->bannerWidth - $this->stringDimension($text1,$fontsize1,$font)[0])/2;
        $text2_x = ($this->bannerWidth - $this->stringDimension($text2,$fontsize2,$font)[0])/2;
        $something_x = $text1_x + $this->stringDimension($template1,$fontsize1,$font)[0] + 0;
        $verb_x = $text1_x + $this->stringDimension($template1.$something.$template2,$fontsize1,$font)[0] + 0;

        //draw
        imagettftext($image, $fontsize1, $this->fontRotation, $text1_x , ($this->bannerHeigh)*0.45, $fontcolor1, $font, $text1);
        imagettftext($image, $fontsize1, $this->fontRotation, $something_x, ($this->bannerHeigh)*0.45, $fontcolor2, $font, $something);
        imagettftext($image, $fontsize1, $this->fontRotation, $verb_x, ($this->bannerHeigh)*0.45, $fontcolor2, $font, $verb);
        imagettftext($image, $fontsize2, $this->fontRotation, $text2_x, ($this->bannerHeigh + $this->fontPaddingTop)/2, $fontcolor1, $font, $text2);
        break;

			case '9':
				//Create text string
				$this->templateText3 = $template3;
				$text1 = $template1.$something.$template2.$verb.$this->templateText3;
				$text2 = $other;

				//text x
				$this->CaleTextStyle1($text1, $text2, $template1, $something, $template2, $x1, $x2, $x3, $x4);

				//draw
				imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 , ($this->bannerHeigh)/2, $fontcolor1, $font, $text1);
				imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 + $x3 + 2, ($this->bannerHeigh)/2, $fontcolor2, $font, $something);
				imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 + $x3 + 1, ($this->bannerHeigh)/2, $fontcolor2, $font, $something);
        imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 + $x4 - 2, ($this->bannerHeigh)/2, $fontcolor2, $font, $verb);
        imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 + $x4 - 3, ($this->bannerHeigh)/2, $fontcolor2, $font, $verb);
				imagettftext($image, $this->fontSizeStyle2, $this->fontRotation, $x2, ($this->bannerHeigh + $this->fontPaddingTop)/2, $fontcolor1, $font, $text2);
				break;

			case '10':
				//Create text string
				$text1 = $template1.$something.$template2.$verb;
				$text2 = $other;

				//text x
				$this->CaleTextStyle1($text1, $text2, $template1, $something, $template2, $x1, $x2, $x3, $x4);

				//draw
				imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 , ($this->bannerHeigh)/2, $fontcolor1, $font, $text1);
        imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 + $x3 - 1, ($this->bannerHeigh)/2, $fontcolor2, $font, $something);
        imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 + $x3 - 2, ($this->bannerHeigh)/2, $fontcolor2, $font, $something);
				imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 + $x4 - 6, ($this->bannerHeigh)/2, $fontcolor2, $font, $verb);
				imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 + $x4 - 5, ($this->bannerHeigh)/2, $fontcolor2, $font, $verb);
				imagettftext($image, $this->fontSizeStyle2, $this->fontRotation, $x2, ($this->bannerHeigh + $this->fontPaddingTop)/2, $fontcolor1, $font, $text2);
				break;

			case '11':
				//Create text string
				$text1 = $template1.$something.$template2.$verb;
				$text2 = $other;

				//text x
				$this->CaleTextStyle1($text1, $text2, $template1, $something, $template2, $x1, $x2, $x3, $x4);

				//draw
				imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 , ($this->bannerHeigh)/2, $fontcolor1, $font, $text1);
				imagettftext($image, $this->fontSizeStyle2, $this->fontRotation, $x2, ($this->bannerHeigh + $this->fontPaddingTop)/2, $fontcolor2, $font, $text2);
				break;

			case '12':
				//Create text string
				$text1 = $template1.$something.$template2.$verb;
				$text2 = $other;

				//text x
				$this->CaleTextStyle1($text1, $text2, $template1, $something, $template2, $x1, $x2, $x3, $x4);

				//draw
				imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 , ($this->bannerHeigh)/2, $fontcolor1, $font, $text1);
				imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 + $x3 + 0, ($this->bannerHeigh)/2, $fontcolor2, $font, $something);
        imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 + $x4 - 3, ($this->bannerHeigh)/2, $fontcolor2, $font, $verb);
        imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 + $x4 - 4, ($this->bannerHeigh)/2, $fontcolor2, $font, $verb);
				imagettftext($image, $this->fontSizeStyle2, $this->fontRotation, $x2, ($this->bannerHeigh + $this->fontPaddingTop)/2, $fontcolor1, $font, $text2);
				break;

			case '13':
				//Create text string
				$text1 = $something;
				$text2 = $other;

				//font size
				$this->fontSizeStyle1 = 45;

				//text x
				$this->CaleTextStyle3($text1, $text2, $x1, $x2);

				//draw
				imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 , ($this->bannerHeigh)/2, $fontcolor1, $font, $text1);
				imagettftext($image, $this->fontSizeStyle2, $this->fontRotation, $x2, ($this->bannerHeigh + $this->fontPaddingTop)/2, $fontcolor2, $font, $text2);
				break;

			case '14':
				//Create text string
				$text1 = $something.$template1.$verb;
				$text2 = $template2.$other;

				//text x
				$this->CaleTextStyle4($text1, $text2, $template1, $something, $template2, $other, $x1, $x2, $x3, $x4);

				//draw
				imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 , ($this->bannerHeigh)/2 - 20, $fontcolor1, $font, $text1);
				imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1, ($this->bannerHeigh)/2-20 , $fontcolor2, $font, $something);
				//imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 + $x3 + 11, ($this->bannerHeigh)/2 -20, $fontcolor2, $font, $verb);
				imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x4, ($this->bannerHeigh + $this->fontPaddingTop)/2 + 10, $fontcolor1, $font, $text2);
				break;

			default:
				//Create text string
				$text1 = $template1.$something.$template2.$verb;
				$text2 = $other;

				//text x
				$this->CaleTextStyle1($text1, $text2, $template1, $something, $template2, $x1, $x2, $x3, $x4);

				//draw
				imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 , ($this->bannerHeigh)/2, $fontcolor1, $font, $text1);
				imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 + $x3 + 15, ($this->bannerHeigh)/2, $fontcolor2, $font, $something);
				imagettftext($image, $this->fontSizeStyle1, $this->fontRotation, $x1 + $x4 + 16, ($this->bannerHeigh)/2, $fontcolor2, $font, $verb);
				imagettftext($image, $this->fontSizeStyle2, $this->fontRotation, $x2, ($this->bannerHeigh + $this->fontPaddingTop)/2, $fontcolor1, $font, $text2);
				break;
		}

		switch ($directpost) {
			case 1:
				header('Content-Type: image/png');
				$filename=time();
				$save = "./temp/".$filename.".png";
				imagepng($image, $save, 9, null);
				$url="facebookpost/?photo=".$filename;
				header("Location: $url");
				break;

			case 2:
				ob_start();
				imagepng($image,null,9,null);
				$image = ob_get_contents();
				//destroy
				ob_end_clean();
				@imagedestroy($image);
				print '<img src="data:image/png;base64,'.base64_encode($image).'" width="'.$this->bannerWidth.'" height="'.$this->bannerHeigh.'"/>';
				break;

			default:
				header('Content-Type: image/png');
				header("Content-Transfer-Encoding: binary");
				header('Content-Description: File Transfer');
				header('Content-Disposition: attachment; filename=cover.png');

				imagepng($image, null, 9, null);
				@imagedestroy($image);
				break;
		}
	}
  function CaleX($flag, $style, $text)
  {
    $textLen = imagettfbbox($style, $this->fontRotation, __DIR__ . $this->fontPath, $text);
    $textWidth = abs($textLen[4] - $textLen[0]);
    //flag is control textwidth type
    if ($flag == 1){
      return $this->bannerWidth - $this->leftPadding - $textWidth;
    }else if ($flag == 2){
      return $textWidth;
    }
  }
  function CaleTextStyle1($text1, $text2, $template1, $something, $template2, &$x1, &$x2, &$x3, &$x4)
  {
    $x1 = $this->CaleX(1, $this->fontSizeStyle1, $text1);
    $x2 = $this->CaleX(1, $this->fontSizeStyle2, $text2);
    $x3 = $this->CaleX(2, $this->fontSizeStyle1, $template1);
    $x4 = $this->CaleX(2, $this->fontSizeStyle1, $template1.$something.$template2) + 3;
  }
  function CaleTextStyle2($text1, $text2, $template1, &$x1, &$x2, &$x3)
  {
    $x1 = $this->CaleX(1, $this->fontSizeStyle1, $text1);
    $x2 = $this->CaleX(1, $this->fontSizeStyle2, $text2);
    $x3 = $this->CaleX(2, $this->fontSizeStyle1, $template1);
  }
  function CaleTextStyle3($text1, $text2, &$x1, &$x2)
  {
    $x1 = $this->CaleX(1, $this->fontSizeStyle1, $text1);
    $x2 = $this->CaleX(1, $this->fontSizeStyle2, $text2);
  }
  function CaleTextStyle4($text1, $text2, $template1, $something, $template2, $other, &$x1, &$x2, &$x3, &$x4)
  {
    $x1 = $this->CaleX(1, $this->fontSizeStyle1, $text1);
    $x2 = $this->CaleX(1, $this->fontSizeStyle1, $text2);
    $x3 = $this->CaleX(2, $this->fontSizeStyle1, $something.$template1);
    $x4 = $this->CaleX(1, $this->fontSizeStyle1, $template2.$other) + 3;
  }
  function stringDimension($string,$size,$font)
  {
    $dimensions = imagettfbbox($size, 0, $font, $string);
    return array(
      abs($dimensions[4] - $dimensions[0]),
      abs($dimensions[5] - $dimensions[1])
    );
  }
}
?>
