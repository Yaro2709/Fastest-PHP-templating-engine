<?php

class __Mustache_d973950430f21d92ebf7c7804d794af8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<html><head></head><body>
';
        // 'embiggened' section
        $value = $context->find('embiggened');
        $buffer .= $this->section3f98672d6f16e5e8296a95820417a3dc($context, $indent, $value);
        $buffer .= $indent . '</body></html>';

        return $buffer;
    }

    private function section3f98672d6f16e5e8296a95820417a3dc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
