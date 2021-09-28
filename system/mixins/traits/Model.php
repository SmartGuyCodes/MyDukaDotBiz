<?php
/*~
.----------------------------------------------------------------------------.
|  Mission: Code Business Ideas Into Realities                               |
|   Version: 0.1                                                             |
|----------------------------------------------------------------------------|
|     Admin: Charles Evans Ogego Otieno (project admininistrator)            |
|   Authors: C.E.O Otieno (trulance247)                                      |
|          : trulance247@gmail.com                                           |                     |
|          :                                                                 |
| Copyright (c) 2013-2016, C.E.O Otieno. All Rights Reserved.                |
| ---------------------------------------------------------------------------|
|   License:                                                                 |
| This program is distributed in the hope that it will be useful - WITHOUT   |
| ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or      |
| FITNESS FOR A PARTICULAR PURPOSE.                                          |
|                                                                            |
| THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"|
| AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE  |
| IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE |
| ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE  |
| LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR        |
| CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF       |
| SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS   |
| INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN    |
| CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)    |
| ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE |
| POSSIBILITY OF SUCH DAMAGE.                                                |
|----------------------------------------------------------------------------|
| I offer a number of paid services :                                        |
| - Web Hosting on highly optimized fast and secure servers                  |
| - Technology Consulting                                                    |
| - Outsourcing (highly qualified programmers and graphic designers)         |
'----------------------------------------------------------------------------'
*/

trait Model{
    use Connector;

    /**
     * Add a record
     *
     * @param null $collection
     *
     * @return array|bool
     */
    public function save ($collection = null) {
        return self::getCollection($collection)->save($this->toArray());
    }

    /**
     * Fetch a list of records
     *
     * @param null  $collection
     * @param array $filter
     * @param array $project
     *
     * @return \MongoCursor
     */
    public static function query ($collection = null, $filter = [], $project = []) {
        return self::getCollection($collection)->find($filter, $project);
    }

    /**
     * Fetch a single record
     *
     * @param null  $collection
     * @param array $filter
     * @param array $project
     *
     * @return array|null
     */
    public static function get ($collection = null, $filter = [], $project = []) {
        return self::createFromObject(self::getCollection($collection)->findOne($filter, $project));
    }

    public static function getAll($collection = null, $filter = [], $project = []){
        return self::createFromObject(self::getCollection($collection), $filter, $project);
    }

    /**
     * Get a single record by id
     *
     * @param       $id
     * @param array $project
     * @param null  $collection
     *
     * @return bool
     */
    public static function find ($id, $project = [], $collection = null) {
        return self::createFromObject(self::getCollection($collection)->findOne(['_id' => $id], $project));
    }

    /**
     * Update a record
     *
     * @param null  $collection
     * @param array $filter
     * @param array $update
     *
     * @return bool
     */
    public static function update ($collection = null, $filter = [], $update = []) {
        $result = self::getCollection($collection)->update($filter, $update);
        return isset($result['updatedExisting']);
    }

    /**
     * @return mixed
     */
    public function toArray () {
        return call_user_func('get_object_vars', $this);
    }

    /**
     * Get Unique User Id
     */
    public function getUid(){
        $result = new MongoId();
        return strtoupper(sha1((string)$result) . time());
    }
}