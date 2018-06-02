<?php

        $memberIds = [];
        $continuationToken = null;
        do {
            $response = $this->getGroupMemberIds('C736d844d8deb0e75256f7fcf6b388ff1', $continuationToken);
            $data = $response->getJSONDecodedBody();
            $memberIds = array_merge($memberIds, $data['memberIds']);
            $continuationToken = isset($data['next']) ? $data['next'] : null;
        } while ($continuationToken);
echo $memberIds;
    
