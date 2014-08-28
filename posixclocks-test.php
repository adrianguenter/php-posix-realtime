<?php
/*
  Copyright 2011 Adrian Guenter  <adrianguenter@gmail.com>

  This file is part of php_posixclocks and licensed
  under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License.
*/

echo "Clock times:\n";
echo "CLOCK_REALTIME           " . posix_clock_gettime(PSXCLK_CLOCK_REALTIME) . "\n";
echo "CLOCK_MONOTONIC          " . posix_clock_gettime(PSXCLK_CLOCK_MONOTONIC) . "\n";
echo "CLOCK_PROCESS_CPUTIME_ID " . posix_clock_gettime(PSXCLK_CLOCK_PROCESS_CPUTIME_ID) . "\n";
echo "CLOCK_THREAD_CPUTIME_ID  " . posix_clock_gettime(PSXCLK_CLOCK_THREAD_CPUTIME_ID) . "\n";

echo "\nClock resolutions:\n";
echo "CLOCK_REALTIME           " . posix_clock_getres(PSXCLK_CLOCK_REALTIME) . "\n";
echo "CLOCK_MONOTONIC          " . posix_clock_getres(PSXCLK_CLOCK_MONOTONIC) . "\n";
echo "CLOCK_PROCESS_CPUTIME_ID " . posix_clock_getres(PSXCLK_CLOCK_PROCESS_CPUTIME_ID) . "\n";
echo "CLOCK_THREAD_CPUTIME_ID  " . posix_clock_getres(PSXCLK_CLOCK_THREAD_CPUTIME_ID) . "\n";
