<?php

namespace imm\Request\V20170906;

/**
 * Request of DeleteVideo
 *
 * @method string getVideoUri()
 * @method string getProject()
 * @method string getSetId()
 * @method string getResources()
 */
class DeleteVideoRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'imm',
            '2017-09-06',
            'DeleteVideo',
            '2017-09-06'
        );
    }

    /**
     * @param string $videoUri
     *
     * @return $this
     */
    public function setVideoUri($videoUri)
    {
        $this->requestParameters['VideoUri'] = $videoUri;
        $this->queryParameters['VideoUri'] = $videoUri;

        return $this;
    }

    /**
     * @param string $project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->requestParameters['Project'] = $project;
        $this->queryParameters['Project'] = $project;

        return $this;
    }

    /**
     * @param string $setId
     *
     * @return $this
     */
    public function setSetId($setId)
    {
        $this->requestParameters['SetId'] = $setId;
        $this->queryParameters['SetId'] = $setId;

        return $this;
    }

    /**
     * @param string $resources
     *
     * @return $this
     */
    public function setResources($resources)
    {
        $this->requestParameters['Resources'] = $resources;
        $this->queryParameters['Resources'] = $resources;

        return $this;
    }
}
