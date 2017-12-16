<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Resource;

use Jane\OpenApiRuntime\Client\QueryParam;

trait SecretResourceTrait
{
    /**
     * @param array $parameters {
     *
     *     @var string $filters A JSON encoded value of the filters (a `map[string][]string`) to process on the secrets list. Available filters:

    - `names=<secret name>`

     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @throws \Docker\API\Exception\SecretListInternalServerErrorException
     *
     * @return \Psr\Http\Message\ResponseInterface|\Docker\API\Model\Secret
     */
    public function secretList(array $parameters = [], string $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('filters', null);
        $url = '/v1.25/secrets';
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'localhost', 'Accept' => ['application/json']], $queryParam->buildHeaders($parameters));
        $body = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $response = $this->httpClient->sendRequest($request);
        if (self::FETCH_OBJECT === $fetch) {
            if (200 === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Docker\\API\\Model\\Secret[]', 'json');
            }
            if (500 === $response->getStatusCode()) {
                throw new \Docker\API\Exception\SecretListInternalServerErrorException($this->serializer->deserialize((string) $response->getBody(), 'Docker\\API\\Model\\ErrorResponse', 'json'));
            }
        }

        return $response;
    }

    /**
     * @param \Docker\API\Model\SecretsCreatePostBody $body
     * @param array                                   $parameters List of parameters
     * @param string                                  $fetch      Fetch mode (object or response)
     *
     * @throws \Docker\API\Exception\SecretCreateNotAcceptableException
     * @throws \Docker\API\Exception\SecretCreateConflictException
     * @throws \Docker\API\Exception\SecretCreateInternalServerErrorException
     *
     * @return \Psr\Http\Message\ResponseInterface|\Docker\API\Model\SecretsCreatePostResponse201
     */
    public function secretCreate(\Docker\API\Model\SecretsCreatePostBody $body, array $parameters = [], string $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/v1.25/secrets/create';
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'localhost', 'Accept' => ['application/json'], 'Content-Type' => 'application/json'], $queryParam->buildHeaders($parameters));
        $body = $this->serializer->serialize($body, 'json');
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $response = $this->httpClient->sendRequest($request);
        if (self::FETCH_OBJECT === $fetch) {
            if (201 === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Docker\\API\\Model\\SecretsCreatePostResponse201', 'json');
            }
            if (406 === $response->getStatusCode()) {
                throw new \Docker\API\Exception\SecretCreateNotAcceptableException($this->serializer->deserialize((string) $response->getBody(), 'Docker\\API\\Model\\ErrorResponse', 'json'));
            }
            if (409 === $response->getStatusCode()) {
                throw new \Docker\API\Exception\SecretCreateConflictException($this->serializer->deserialize((string) $response->getBody(), 'Docker\\API\\Model\\ErrorResponse', 'json'));
            }
            if (500 === $response->getStatusCode()) {
                throw new \Docker\API\Exception\SecretCreateInternalServerErrorException($this->serializer->deserialize((string) $response->getBody(), 'Docker\\API\\Model\\ErrorResponse', 'json'));
            }
        }

        return $response;
    }

    /**
     * @param string $id         ID of the secret
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @throws \Docker\API\Exception\SecretDeleteNotFoundException
     * @throws \Docker\API\Exception\SecretDeleteInternalServerErrorException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function secretDelete(string $id, array $parameters = [], string $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/v1.25/secrets/{id}';
        $url = str_replace('{id}', urlencode($id), $url);
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'localhost', 'Accept' => ['application/json']], $queryParam->buildHeaders($parameters));
        $body = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('DELETE', $url, $headers, $body);
        $response = $this->httpClient->sendRequest($request);
        if (self::FETCH_OBJECT === $fetch) {
            if (204 === $response->getStatusCode()) {
                return null;
            }
            if (404 === $response->getStatusCode()) {
                throw new \Docker\API\Exception\SecretDeleteNotFoundException($this->serializer->deserialize((string) $response->getBody(), 'Docker\\API\\Model\\ErrorResponse', 'json'));
            }
            if (500 === $response->getStatusCode()) {
                throw new \Docker\API\Exception\SecretDeleteInternalServerErrorException($this->serializer->deserialize((string) $response->getBody(), 'Docker\\API\\Model\\ErrorResponse', 'json'));
            }
        }

        return $response;
    }

    /**
     * @param string $id         ID of the secret
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @throws \Docker\API\Exception\SecretInspectNotFoundException
     * @throws \Docker\API\Exception\SecretInspectNotAcceptableException
     * @throws \Docker\API\Exception\SecretInspectInternalServerErrorException
     *
     * @return \Psr\Http\Message\ResponseInterface|\Docker\API\Model\Secret
     */
    public function secretInspect(string $id, array $parameters = [], string $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/v1.25/secrets/{id}';
        $url = str_replace('{id}', urlencode($id), $url);
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'localhost', 'Accept' => ['application/json']], $queryParam->buildHeaders($parameters));
        $body = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $response = $this->httpClient->sendRequest($request);
        if (self::FETCH_OBJECT === $fetch) {
            if (200 === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Docker\\API\\Model\\Secret', 'json');
            }
            if (404 === $response->getStatusCode()) {
                throw new \Docker\API\Exception\SecretInspectNotFoundException($this->serializer->deserialize((string) $response->getBody(), 'Docker\\API\\Model\\ErrorResponse', 'json'));
            }
            if (406 === $response->getStatusCode()) {
                throw new \Docker\API\Exception\SecretInspectNotAcceptableException($this->serializer->deserialize((string) $response->getBody(), 'Docker\\API\\Model\\ErrorResponse', 'json'));
            }
            if (500 === $response->getStatusCode()) {
                throw new \Docker\API\Exception\SecretInspectInternalServerErrorException($this->serializer->deserialize((string) $response->getBody(), 'Docker\\API\\Model\\ErrorResponse', 'json'));
            }
        }

        return $response;
    }
}