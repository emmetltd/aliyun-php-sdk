<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace Emmetltd\AliyunCore\Api\Crm\Request\V20150408;

class QueryCustomerLabelRequest extends \Emmetltd\AliyunCore\RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Crm", "2015-04-08", "QueryCustomerLabel");
		$this->setMethod("POST");
	}

	private  $labelSeries;

	public function getLabelSeries() {
		return $this->labelSeries;
	}

	public function setLabelSeries($labelSeries) {
		$this->labelSeries = $labelSeries;
		$this->queryParameters["LabelSeries"]=$labelSeries;
	}
	
}