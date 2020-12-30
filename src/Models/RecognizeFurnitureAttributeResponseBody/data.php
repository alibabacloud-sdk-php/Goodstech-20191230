<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Goodstech\V20191230\Models\RecognizeFurnitureAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $predStyle;

    /**
     * @var float
     */
    public $predProbability;

    /**
     * @var string
     */
    public $predStyleId;
    protected $_name = [
        'predStyle'       => 'PredStyle',
        'predProbability' => 'PredProbability',
        'predStyleId'     => 'PredStyleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->predStyle) {
            $res['PredStyle'] = $this->predStyle;
        }
        if (null !== $this->predProbability) {
            $res['PredProbability'] = $this->predProbability;
        }
        if (null !== $this->predStyleId) {
            $res['PredStyleId'] = $this->predStyleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PredStyle'])) {
            $model->predStyle = $map['PredStyle'];
        }
        if (isset($map['PredProbability'])) {
            $model->predProbability = $map['PredProbability'];
        }
        if (isset($map['PredStyleId'])) {
            $model->predStyleId = $map['PredStyleId'];
        }

        return $model;
    }
}
