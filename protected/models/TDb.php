<?php

/**
 * This is the model class for table "t_db".
 *
 * The followings are the available columns in table 't_db':
 * @property integer $id
 * @property string $subdiv
 * @property string $nr_reg
 * @property string $date_reg
 * @property string $date_doc
 * @property string $elab
 * @property string $id_elab
 * @property string $address
 * @property string $nr_cadastr
 * @property string $tel
 * @property string $content
 * @property string $responsabil
 * @property string $get_exec
 * @property string $nr_respons
 * @property string $date_respons
 * @property string $respons_type
 * @property string $note
 * @property string $dossier
 * @property integer $author
 * @property integer $author
 */
class TDb extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @return TDb the static model class
     */
    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 't_db';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('subdiv, nr_reg, date_reg, date_doc, elab, id_elab, address, nr_cadastr, tel, content, responsabil, get_exec, nr_respons, date_respons, respons_type, note, dossier, author', 'date_add', 'required'),
            array('author', 'numerical', 'integerOnly' => true),
            array('subdiv, respons_type', 'length', 'max' => 2),
            array('nr_reg', 'length', 'max' => 7),
            array('elab, id_elab, address', 'length', 'max' => 255),
            array('nr_cadastr', 'length', 'max' => 15),
            array('tel', 'length', 'max' => 10),
            array('responsabil', 'length', 'max' => 20),
            array('nr_respons', 'length', 'max' => 150),
            array('dossier', 'length', 'max' => 50),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, subdiv, nr_reg, date_reg, date_doc, elab, id_elab, address, nr_cadastr, tel, content, responsabil, get_exec, nr_respons, date_respons, respons_type, note, dossier, author, date_add', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'subdiv2' => array(self::BELONGS_TO, 'Subdiv', 'subdiv'),
            'resp' => array(self::BELONGS_TO, 'Responsabil', 'responsabil'),
            'tipraspuns' => array(self::BELONGS_TO, 'Tipraspuns', 'respons_type'),
            'autor' => array(self::BELONGS_TO, 'Users', 'author'),
            'docs0' => array(self::HAS_MANY, 'Responsabil', 'id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'Nr. d/o',
            'subdiv' => 'Subdiviziunea',
            'nr_reg' => 'Nr. de înregistrare',
            'date_reg' => 'Data înregistrării',
            'date_doc' => 'Data cererii',
            'elab' => 'Solicitant',
            'id_elab' => 'Cod personal / IDNO',
            'address' => 'Adresa obiectului solicitat',
            'nr_cadastr' => 'Nr. cadastral',
            'tel' => 'Telefon de contact',
            'content' => 'Scurta expunere',
            'responsabil' => 'Executor',
            'get_exec' => 'Data înmînării spre executare',
            'nr_respons' => 'Nr. actului',
            'date_respons' => 'Data întocmirii actului',
            'respons_type' => 'Tipul răspunsului',
            'note' => 'Notă',
            'dossier' => 'Dosar',
            'author' => 'Author',
            'date_add' => 'Data adaugarii',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('subdiv', $this->subdiv, true);
        $criteria->compare('nr_reg', $this->nr_reg, true);
        $criteria->compare('date_reg', $this->date_reg, true);
        $criteria->compare('date_doc', $this->date_doc, true);
        $criteria->compare('elab', $this->elab, true);
        $criteria->compare('id_elab', $this->id_elab, true);
        $criteria->compare('address', $this->address, true);
        $criteria->compare('nr_cadastr', $this->nr_cadastr, true);
        $criteria->compare('tel', $this->tel, true);
        $criteria->compare('content', $this->content, true);
        $criteria->compare('responsabil', $this->responsabil, true);
        $criteria->compare('get_exec', $this->get_exec, true);
        $criteria->compare('nr_respons', $this->nr_respons, true);
        $criteria->compare('date_respons', $this->date_respons, true);
        $criteria->compare('respons_type', $this->respons_type, true);
        $criteria->compare('note', $this->note, true);
        $criteria->compare('dossier', $this->dossier, true);
        $criteria->compare('author', $this->author);
        $criteria->compare('date_add', $this->date_add);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

    public function searchAll() {
        $criteria = new CDbCriteria;
        if (isset($_GET['date_add'])) {
            $criteria->condition = "subdiv=:subdiv AND date_add=:add";
            $criteria->params = array(':subdiv' => $_GET['subdiv'], ':add' => $_GET['date_add']);
        } else if (isset($_GET['month'])) {
            $criteria->condition = "subdiv=:subdiv AND MONTH(date_reg)=:month"; // AND date_reg=:date_reg
            $criteria->params = array(':subdiv' => $_GET['subdiv'], ':month' => $_GET['month']);
        } else {
            $criteria->condition = "subdiv=:subdiv";
            $criteria->params = array(':subdiv' => $_GET['subdiv']);
        }

        //$criteria->params = array(':subdiv' => $_GET['subdiv']/* ,':date_reg'=>$_GET['date_reg'],':month'=>$_GET['month'] */);
        $criteria->order = 'id DESC';
        //if(isset($_GET['date_reg']))
        //  $criteria->condition = "date_reg=2011-11-15";

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

}