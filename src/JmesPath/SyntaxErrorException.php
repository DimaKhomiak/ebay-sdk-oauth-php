<?php
/**
 * Copyright (c) 2014 Michael Dowling, https://github.com/mtdowling
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
namespace DKH\eBaySDK\JmesPath;

/**
 * Syntax errors raise this exception that gives context
 */
class SyntaxErrorException extends \InvalidArgumentException
{
    /**
     * @param string $expectedTypesOrMessage Expected array of tokens or message
     * @param array  $token                  Current token
     * @param string $expression             Expression input
     */
    public function __construct(
        $expectedTypesOrMessage,
        array $token,
        $expression
    ) {
        $message = "Syntax error at character {$token['pos']}\n"
            . $expression . "\n" . str_repeat(' ', $token['pos']) . "^\n";
        $message .= !is_array($expectedTypesOrMessage)
            ? $expectedTypesOrMessage
            : $this->createTokenMessage($token, $expectedTypesOrMessage);
        parent::__construct($message);
    }

    private function createTokenMessage(array $token, array $valid)
    {
        return sprintf(
            'Expected one of the following: %s; found %s "%s"',
            implode(', ', array_keys($valid)),
            $token['type'],
            $token['value']
        );
    }
}
