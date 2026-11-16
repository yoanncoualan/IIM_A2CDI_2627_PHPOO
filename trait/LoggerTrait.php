<?php

trait LoggerTrait {
  public function log(string $className, string $message): void
  {
    echo '[LOG] '. $className .' : '. $message ."\n";
  }
}