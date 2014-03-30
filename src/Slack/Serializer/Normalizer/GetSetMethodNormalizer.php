<?php

namespace Slack\Serializer\Normalizer;

use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer as BaseGetSetMethodNormalizer;

/**
 * Class GetSetMethodNormalizer
 */
class GetSetMethodNormalizer extends BaseGetSetMethodNormalizer
{
    /**
     * {@inheritdoc}
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $camelizedKeyAttributes = parent::normalize($object, $format, $context);

        $attributes = array();

        foreach ($camelizedKeyAttributes as $name => $value) {
            if (!isset($value)) {
                continue;
            }
            $attributes[$this->fromCamelCase($name)] = $value;
        }

        return $attributes;
    }

    /**
     * fromCamelCase
     *
     * @param string $str
     */
    protected function fromCamelCase($str)
    {
        $str[0] = strtolower($str[0]);
        $func = create_function('$c', 'return "_" . strtolower($c[1]);');

        return preg_replace_callback('/([A-Z])/', $func, $str);
    }
}
