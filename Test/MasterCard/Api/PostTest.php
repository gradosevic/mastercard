<?php
/*
 * Copyright 2016 MasterCard International.
 *
 * Redistribution and use in source and binary forms, with or without modification, are 
 * permitted provided that the following conditions are met:
 *
 * Redistributions of source code must retain the above copyright notice, this list of 
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list of 
 * conditions and the following disclaimer in the documentation and/or other materials 
 * provided with the distribution.
 * Neither the name of the MasterCard International Incorporated nor the names of its 
 * contributors may be used to endorse or promote products derived from this software 
 * without specific prior written permission.
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES 
 * OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT 
 * SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, 
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
 * TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; 
 * OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER 
 * IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING 
 * IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF 
 * SUCH DAMAGE.
 *
 */

namespace MasterCard\Api;

use MasterCard\Core\Model\RequestMap;
use MasterCard\Core\ApiConfig;
use MasterCard\Core\Security\OAuth\OAuthAuthentication;



class PostTest extends BaseTest {

    public static $responses = array();

    protected function setUp() {
        parent::setUp();
        ApiConfig::setDebug(false);
        ApiConfig::setSandbox(true);
    }

    
    
    
    
                
        public function test_list_posts_query_1()
        {
            

            

            $map = new RequestMap();
            
            
            $responseList = Post::listByCriteria($map);

            $ignoreAssert = array();
            
            $this->customAssertEqual($ignoreAssert, $responseList[0], "id", "1");
            $this->customAssertEqual($ignoreAssert, $responseList[0], "title", "My Title");
            $this->customAssertEqual($ignoreAssert, $responseList[0], "body", "some body text");
            $this->customAssertEqual($ignoreAssert, $responseList[0], "userId", "1");
            

            self::putResponse("list_posts_query_1", $responseList[0]);
            
        }
        
        public function test_list_posts_query_2()
        {
            

            

            $map = new RequestMap();
            $map->set("max", "10");
            
            
            $responseList = Post::listByCriteria($map);

            $ignoreAssert = array();
            
            $this->customAssertEqual($ignoreAssert, $responseList[0], "id", "1");
            $this->customAssertEqual($ignoreAssert, $responseList[0], "title", "My Title");
            $this->customAssertEqual($ignoreAssert, $responseList[0], "body", "some body text");
            $this->customAssertEqual($ignoreAssert, $responseList[0], "userId", "1");
            

            self::putResponse("list_posts_query_2", $responseList[0]);
            
        }
        
    
    
    
    
    
    
                
        public function test_create_post_test_only()
        {

            $map = new RequestMap();
            $map->set("title", "Title of Post");
            $map->set("body", "Some text as a body");
            
            
            $response = Post::create($map);

            $ignoreAssert = array();
            
            $this->customAssertEqual($ignoreAssert, $response, "id", "1");
            $this->customAssertEqual($ignoreAssert, $response, "title", "My Title");
            $this->customAssertEqual($ignoreAssert, $response, "body", "some body text");
            $this->customAssertEqual($ignoreAssert, $response, "userId", "1");
            

            self::putResponse("create_post_test_only", $response);
        }
        
    
    
    
    
    
    
    
    
    
    
    
    
                

        public function test_get_post_query_1()
        {
            

            

            $id = "1";

            $map = new RequestMap();
            
            

            $response = Post::read($id,$map);

            $ignoreAssert = array();
            
            $this->customAssertEqual($ignoreAssert, $response, "id", "1");
            $this->customAssertEqual($ignoreAssert, $response, "title", "My Title");
            $this->customAssertEqual($ignoreAssert, $response, "body", "some body text");
            $this->customAssertEqual($ignoreAssert, $response, "userId", "1");
            

            self::putResponse("get_post_query_1", $response);
            
        }
        

        public function test_get_post_query_2()
        {
            

            

            $id = "1";

            $map = new RequestMap();
            $map->set("min", "1");
            $map->set("max", "10");
            
            

            $response = Post::read($id,$map);

            $ignoreAssert = array();
            
            $this->customAssertEqual($ignoreAssert, $response, "id", "1");
            $this->customAssertEqual($ignoreAssert, $response, "title", "My Title");
            $this->customAssertEqual($ignoreAssert, $response, "body", "some body text");
            $this->customAssertEqual($ignoreAssert, $response, "userId", "1");
            

            self::putResponse("get_post_query_2", $response);
            
        }
        
    
    
    
    
    
                

        public function test_update_post()
        {
            

            

            $map = new RequestMap();
            $map->set ("id", "1111");
            $map->set ("title", "updated title");
            $map->set ("body", "updated body");
            
            
            $request = new Post($map);
            $response = $request->update();

            $ignoreAssert = array();
            
            $this->customAssertEqual($ignoreAssert, $response, "id", "1");
            $this->customAssertEqual($ignoreAssert, $response, "title", "updated title");
            $this->customAssertEqual($ignoreAssert, $response, "body", "updated body");
            $this->customAssertEqual($ignoreAssert, $response, "userId", "1");
            

            self::putResponse("update_post", $response);
            
        }
        
    
    
    
    
    
    
    
    
    
    
                

        public function test_delete_post()
        {
            

            

            $map = new RequestMap();
            
            
            $response = Post::deleteById("1", $map);
            $this->assertNotNull($response);

            $ignoreAssert = array();
            
            

            self::putResponse("delete_post", $response);
            
        }
        

    
    
    
    
}



