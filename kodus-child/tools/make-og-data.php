<?php
/**
 * One-off OG image generator for /data (State of AI Code Review 2026).
 * Renders a 1200x630 PNG with GD using the bundled pixel + mono fonts.
 * Run: php make-og-data.php  (writes ../assets/img/og-data.png)
 */

$W = 1200; $H = 630;
$FONT_DIR = __DIR__ . '/../assets/fonts';
$PIXEL = $FONT_DIR . '/PressStart2P-Regular.ttf';
$MONO  = $FONT_DIR . '/JetBrainsMono-Regular.ttf';
$MONOB = $FONT_DIR . '/JetBrainsMono-Bold.ttf';
$LOGO  = __DIR__ . '/../assets/img/kodus_dark.png';
$OUT   = __DIR__ . '/../assets/img/og-data.png';

$im = imagecreatetruecolor($W, $H);
imagesavealpha($im, true);

// palette
$bg     = imagecolorallocate($im, 0x10, 0x10, 0x19);
$grid   = imagecolorallocate($im, 0x20, 0x20, 0x32);
$text   = imagecolorallocate($im, 0xF3, 0xF3, 0xF7);
$orange = imagecolorallocate($im, 0xF8, 0xB7, 0x6D);
$muted  = imagecolorallocate($im, 0xCD, 0xCD, 0xDF);
$dim    = imagecolorallocate($im, 0x9A, 0xA0, 0xB6);
$green  = imagecolorallocate($im, 0x42, 0xBE, 0x65);

imagefilledrectangle($im, 0, 0, $W, $H, $bg);

// subtle background grid (brand texture)
for ($x = 0; $x <= $W; $x += 60) imageline($im, $x, 0, $x, $H, $grid);
for ($y = 0; $y <= $H; $y += 60) imageline($im, 0, $y, $W, $y, $grid);
// dim the grid by overlaying a translucent bg wash
$wash = imagecolorallocatealpha($im, 0x10, 0x10, 0x19, 70);
imagefilledrectangle($im, 0, 0, $W, $H, $wash);

$PAD = 80;

// helper: draw text, return [width]
function tw($font, $size, $str) {
    $b = imagettfbbox($size, 0, $font, $str);
    return abs($b[2] - $b[0]);
}

// logo (kodus_dark.png) top-left, scaled to height ~50
if (file_exists($LOGO)) {
    $logo = imagecreatefrompng($LOGO);
    $lw = imagesx($logo); $lh = imagesy($logo);
    $targetH = 52; $targetW = (int)round($lw * ($targetH / $lh));
    imagecopyresampled($im, $logo, $PAD, 72, 0, 0, $targetW, $targetH, $lw, $lh);
    imagedestroy($logo);
}

// eyebrow: green dot + report label
$eyeY = 168;
imagefilledellipse($im, $PAD + 6, $eyeY - 4, 12, 12, $green);
imagettftext($im, 15, 0, $PAD + 24, $eyeY, $muted, $MONOB, 'STATE OF AI CODE REVIEW 2026  /  KODUS RESEARCH');

// headline (pixel) — 3 lines, "1.6x" in orange
$hSize = 50; $lineH = 82; $hy = 290;
imagettftext($im, $hSize, 0, $PAD, $hy, $text, $PIXEL, 'AI writes');
// line 2: orange "1.6x" + white " more bugs"
$part1 = "1.6\xC3\x97"; $part2 = ' more bugs';
imagettftext($im, $hSize, 0, $PAD, $hy + $lineH, $orange, $PIXEL, $part1);
$w1 = tw($PIXEL, $hSize, $part1);
imagettftext($im, $hSize, 0, $PAD + $w1, $hy + $lineH, $text, $PIXEL, $part2);
// line 3
imagettftext($im, $hSize, 0, $PAD, $hy + 2 * $lineH, $text, $PIXEL, 'than humans.');

// subline (mono) near bottom
$sy = 560;
imagettftext($im, 20, 0, $PAD, $sy, $muted, $MONO, 'Per PR, AI-authored code draws more review findings');
imagettftext($im, 17, 0, $PAD, $sy + 32, $dim, $MONO, "22,743 AI PRs  \xC2\xB7  measured from the diff, not benchmarks");

// orange accent bar on far left
imagefilledrectangle($im, 0, 0, 8, $H, $orange);

imagepng($im, $OUT);
imagedestroy($im);
echo "wrote $OUT\n";
