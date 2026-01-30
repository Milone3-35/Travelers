<?php


class ANSI {

  private string $home_dir;
  private array $fonts;

  public function __construct()
  {
    $this->home_dir = getenv('USERPROFILE');

    $this->fonts = [
      "Ansi Regular" => "$this->home_dir\\.config\\travelers\\fonts\\Ansi Regular.flf",
    ];

  }
  private function parse_font(string $font_name): string {
    if (!in_array($font_name, $this->fonts)) {
      $font_name = "Ansi Regular";
    }
    $font_path = $this->fonts[$font_name];
    return file_get_contents("$font_path");
  }
  public function print_text(string $text_to_print, string $font_name = "Ansi Regular") {
    $font_string = $this->parse_font($font_name);
    echo $font_string;
    
  }
}