<?php
/*
 * Copyright 2011 SimpleThings GmbH
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace SimpleThings\ZetaWebmailBundle\Util;

class MailConverter
{

    public static function convertToUTF8IconvNoNotices($text, $originalCharset)
    {
        if ($originalCharset === 'unknown-8bit' || $originalCharset === 'x-user-defined') {
            $originalCharset = "latin1";
        }
        return @iconv($originalCharset, 'utf-8', $text);
    }

}
