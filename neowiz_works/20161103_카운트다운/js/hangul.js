/**
 * https://github.com/e-/Hangul.js �� �����Ͽ� typewrite �Լ��� �߰���
 */
 
var Hangul = (function() {
  var CHO = [ 
              '��', '��', '��', '��', '��',
              '��', '��', '��', '��', '��', '��',
              '��', '��', '��', '��', '��', '��',
              '��', '��' 
      ],
      JUNG = [ 
              '��', '��', '��', '��', '��',
              '��', '��', '��', '��', ['��', '��'], ['��', '��'],
              ['��', '��'], '��', '��', ['��','��'], ['��','��'], ['��','��'],
              '��', '��', ['��', '��'], '��'
      ],
      JONG = [
              '', '��', '��', ['��','��'], '��', ['��','��'], ['��', '��'], '��', '��',
              ['��', '��'], ['��','��'], ['��','��'], ['��','��'], ['��','��'], ['��','��'], ['��','��'], '��',
              '��', ['��','��'], '��', '��', '��', '��', '��', '��', '��', '��', '��' 
      ],
      HANGUL_OFFSET = 0xAC00,
      CONSONANTS = [  
              '��', '��', '��', '��', '��', '��', '��', '��',
              '��', '��', '��', '��', '��', '��', '��', '��', 
              '��', '��', '��', '��', '��', '��', '��', '��', 
              '��', '��', '��', '��', '��', '��' 
      ],
      COMPLETE_CHO = [ 
              '��', '��', '��', '��', '��',
              '��', '��', '��', '��', '��', '��',
              '��', '��', '��', '��', '��', '��', '��', '��'                
      ],
      COMPLETE_JUNG = [
              '��', '��', '��', '��', '��',
              '��', '��', '��', '��', '��', '��',
              '��', '��', '��', '��', '��', '��',
              '��', '��', '��', '��'
      ],
      COMPLETE_JONG = [
              '', '��', '��', '��', '��', '��', '��', '��', '��',
              '��', '��', '��', '��', '��', '��', '��', '��',
              '��', '��', '��', '��', '��', '��', '��', '��', '��', '��', '��' 
      ],
      COMPLEX_CONSONANTS = [
              ['��','��','��'],
              ['��','��','��'],
              ['��','��','��'],
              ['��','��','��'], 
              ['��','��','��'], 
              ['��','��','��'],
              ['��','��','��'], 
              ['��','��','��'], 
              ['��','��','��'], 
              ['��','��','��'], 
              ['��','��','��']
      ],        
      COMPLEX_VOWELS = [
              ['��','��','��'], 
              ['��','��','��'],
              ['��','��','��'], 
              ['��','��','��'], 
              ['��','��','��'], 
              ['��','��','��'],
              ['��','��','��']
      ],
      CONSONANTS_HASH,
      CHO_HASH,
      JUNG_HASH,
      JONG_HASH,
      COMPLEX_CONSONANTS_HASH,
      COMPLEX_VOWELS_HASH;

  function _makeHash(array){
     var length = array.length, hash = {0 : 0};
     for (var i = 0 ; i < length ; i++) {
       if(array[i])
         hash[array[i].charCodeAt(0)] = i;
     }
     return hash;
  }

  CONSONANTS_HASH = _makeHash(CONSONANTS);
  CHO_HASH = _makeHash(COMPLETE_CHO);
  JUNG_HASH = _makeHash(COMPLETE_JUNG);
  JONG_HASH = _makeHash(COMPLETE_JONG);

  function _makeComplexHash(array){
    var length = array.length, hash = {},
        code1, code2;
    for (var i = 0 ; i < length ; i++) {
      code1 = array[i][0].charCodeAt(0);
      code2 = array[i][1].charCodeAt(0);
      if (typeof hash[code1] === 'undefined') {
        hash[code1] = {};
      }
        hash[code1][code2] = array[i][2].charCodeAt(0);
      }
    return hash;
  }

  COMPLEX_CONSONANTS_HASH = _makeComplexHash(COMPLEX_CONSONANTS);
  COMPLEX_VOWELS_HASH = _makeComplexHash(COMPLEX_VOWELS);

  // �ѱ� ���� �׽�Ʈ �Լ� 
  var makeHangulTest = function(jamo) {
    var cho = jamo[0].charCodeAt(0), 
        jung = jamo[1].charCodeAt(0), 
        jong = jamo[2].charCodeAt(0);
    return String.fromCharCode((CHO_HASH[cho] * 21 + JUNG_HASH[jung]) * 28 + JONG_HASH[jong] + HANGUL_OFFSET);
  };

  function _isConsonant(c){
    return CONSONANTS_HASH[c];
  }

  function _isCho(c){
    return typeof CHO_HASH[c] !== 'undefined';
  }

  function _isJung(c){
    return typeof JUNG_HASH[c] !== 'undefined';
  }

  function _isJong(c){
    return typeof JONG_HASH[c] !== 'undefined';
  }
        
  function _isHangul(c /* code number */){
    return 0xAC00 <= c && c <= 0xd7a3;
  }

  function _isJungJoinable(a,b){
    return (COMPLEX_VOWELS_HASH[a] && COMPLEX_VOWELS_HASH[a][b]) ? COMPLEX_VOWELS_HASH[a][b] : false;
  }

  function _isJongJoinable(a,b){
    return COMPLEX_CONSONANTS_HASH[a] && COMPLEX_CONSONANTS_HASH[a][b] ? COMPLEX_CONSONANTS_HASH[a][b] : false;
  }

   /**
   * ���ڿ��� �Է¹޾Ƽ� ������ ������ �и��� �迭�� ��ȯ�Ѵ�.
   *
   * @param {(string|Object)} string - ���ڿ� 
   * @returns {array} ������ ������ �и��� �迭 
   */
  var disassemble = function(string){
    if (typeof string === 'object') { 
      string = string.join('');
    }

    var result = [], length = string.length, 
        cho, jung, jong, code;

    for (var i = 0 ; i < length ; i++) {
      code = string.charCodeAt(i);
      if (_isHangul(code)) { // �ϼ��� �ѱ��̸�
        code -= HANGUL_OFFSET;
        jong = code % 28;
        jung = (code - jong) / 28 % 21;
        cho = parseInt((code - jong) / 28 / 21);
        result.push(CHO[cho]);
        if (typeof JUNG[jung] === 'object') {
          result = result.concat(JUNG[jung]);
        } else {
          result.push(JUNG[jung]);
        }
        if (jong > 0) {
          if(typeof JONG[jong] === 'object') {
            result = result.concat(JONG[jong]);
          } else {
            result.push(JONG[jong]);
          }
        }
      } else if (_isConsonant(code)) { //�����̸�
        var r;
        if (_isCho(code)) {
          r = CHO[CHO_HASH[code]];
        } else {
          r = JONG[JONG_HASH[code]];
        }
        if (typeof r == 'string') {
          result.push(r);
        } else {
          result = result.concat(r);
        }
      } else if (_isJung(code)) {
        var r = JUNG[JUNG_HASH[code]];
        if (typeof r == 'string') {
          result.push(r);
        } else { 
          result = result.concat(r);
        }
      } else {
        result.push(string.charAt(i));
      }
    }
    return result;
  };

  /**
   * �ڸ�� �и��� �迭 �Ǵ� ���ڿ��� �Է¹޾Ƽ� typewrite�� ���� �ִ�
   * ���ڿ��� �����Ѵ�.
   *
   * @param {(array|string)} jamos - �ڸ� �и��� �迭 �Ǵ� ���ڿ� 
   * @returns {string} typewrite�� ���ڿ� 
   */
  var typewrite  = function(jamos){
    if (typeof jamos === 'string') {
      jamos = disassemble(jamos);
    }

    var result = [], length = jamos.length, code, stage = 0,
        complete_index = -1, //�ϼ��� ���� �ε���
        previous_code;

    /**
     * jamos �迭 complete_index(start) + 1���� index������ �ѱ۷� �ٲ�
     * complete_index�� jamos �迭���� ������ ��ġ�� ��Ÿ����.
     *
     * @param {number} index - ������ index 
     * @param {boolean} [update_index=true] - complete_index ���� ����. 
     * @param {number} [start=complete_index] - ���� index. �������� ������ 
     * complete_index�� �������� �ȴ�.
     */
    function _makeHangul(index, update_index, start){
      var code, cho, jung1, jung2, jong1 = 0, jong2, hangul = '';

      typeof(update_index) === 'undefined' && (update_index = true);
      typeof(start) === 'undefined' ? start = complete_index
          :  update_index = false;  

      if (start + 1 > index) return;

      has_hangul_to_flush = false;

      for (var step = 1; ; step++) {
        //console.log(step);
        //console.log(jamos[start + step]);

        if (step === 1) {
          cho = jamos[start + step].charCodeAt(0);
          if (!_isCho(cho)) {
            result.push(jamos[start + step]);
            update_index && (complete_index = index);
            return;
          }
          hangul = jamos[start + step];
        } else if (step === 2) {
          jung1 = jamos[start + step].charCodeAt(0);
          if (_isCho(jung1)) { //�ι�° �� ������ ���� �� ���� ������ ����̴�
            cho = _isJongJoinable(cho, jung1);
            hangul = String.fromCharCode(cho);
            result.push(hangul);
            update_index && (complete_index = index);
            return;
          } else {
            hangul = String.fromCharCode((CHO_HASH[cho] * 21 + JUNG_HASH[jung1]) * 28 + HANGUL_OFFSET);
          }
        } else if (step === 3) {
          jung2 = jamos[start + step].charCodeAt(0);
          if (_isJungJoinable(jung1, jung2)) {
            jung1 = _isJungJoinable(jung1, jung2);
          } else {
            jong1 = jung2;
          }
          hangul = String.fromCharCode((CHO_HASH[cho] * 21 + JUNG_HASH[jung1]) * 28 + JONG_HASH[jong1] + HANGUL_OFFSET);
        } else if (step === 4) {
          jong2 = jamos[start + step].charCodeAt(0);
          if (_isJongJoinable(jong1, jong2)) {
            jong1 = _isJongJoinable(jong1, jong2);
          } else {
            jong1 = jong2;
          }
          hangul = String.fromCharCode((CHO_HASH[cho] * 21 + JUNG_HASH[jung1]) * 28 + JONG_HASH[jong1] + HANGUL_OFFSET);
        } else if (step === 5) {
          jong2 = jamos[start + step].charCodeAt(0);
          jong1 = _isJongJoinable(jong1, jong2);
          hangul = String.fromCharCode((CHO_HASH[cho] * 21 + JUNG_HASH[jung1]) * 28 + JONG_HASH[jong1] + HANGUL_OFFSET);
        }

        if (start + step >= index) {
          result.push(hangul);
          update_index && (complete_index = index);
          return;
        }
      }
    }

    function _addBS() {
      result.push('\a');
    }

    var has_hangul_to_flush = false;

    for (var i = 0 ; i < length ; i++) {
      //console.log(stage, jamos[i], i, complete_index, has_hangul_to_flush);

      char = jamos[i];
      code = char.charCodeAt(0);
      if (!_isCho(code) && !_isJung(code) && !_isJong(code)){ //��, ��, ���� �� �ƴϸ�
        has_hangul_to_flush ? _makeHangul(i-1) : complete_index = i - 1;
        _makeHangul(i);
        stage = 0;
        continue;
      }

      has_hangul_to_flush = true;

      if (stage == 0) { // �ʼ��� �� ����
        if (_isCho(code)) { // �ʼ��� ���� �ƹ� ���� ����.
          //result.push(char);
          _makeHangul(i, false);
          stage = 1; 
        } 
      } else if (stage == 1) { //�߼��� �� ����
        if (_isJung(code)) { //�߼��� ���� �������� ����.
          _addBS();
          _makeHangul(i, false);
          stage = 2;
        } else { //�ƴϰ� �����̿��� ������ ��찡 �ְ� �������� ��찡 �ִ�.
          if (_isJongJoinable(previous_code, code)) { 
            // ������ �� �ִٸ� �� ���� ����ε� �� �ڿ� ������ �ͼ� 
            // ���� �� �ɼ��� �ְ� �ʼ��� �� ���� �ִ�. ���� ���Ҹ� 
            // �ϼ��� �� ����. �̶� stage5�� ����.
            //stage = 5;
          } else { //������ �� ���ٸ� �� ���� �ϼ� �� ������ �߼��� �� ���� 
            //_makeHangul(i-1); 
          }
        }
      } else if (stage == 2) { //������ �� ���� 
        if (_isJong(code)) { //������ ���� ������ ���� �Ǵ� ������ �´�. 
          _addBS();
          _makeHangul(i, false);
          stage = 3;
        } else if (_isJung(code)) { //�׷��� �߼��� ���� ���� ������ ��ĥ �� �ִ��� ����.
          if (_isJungJoinable(previous_code, code)) { //��ĥ �� ������ ������ ������ �� ���ʰ� �״�� ����
            _addBS();
            _makeHangul(i, false);
          } else { // ��ĥ �� ���ٸ� ��Ÿ�� ���� ��� 
            //_makeHangul(i-1);
            //stage = 4;
          }
        } else { // ��ħ�� �ȵǴ� ������ ���� �� ���� �������� �ϼ��ϰ� �ٽý���
           
          //_makeHangul(i-1);
          //stage = 1;
        }
      } else if (stage == 3) { // ������ �ϳ� �� ����.
        if (_isJong(code)) { // �� �����̸� ��ĥ�� �ִ��� ����.
          if (_isJongJoinable(previous_code, code)) { //��ĥ �� ������ ��� ����. �ֳ��ϸ� �̹��� �� ������ ���� ������ �ʼ��� �� ���� �ֱ� ����
            _addBS();
            _makeHangul(i, false);
          } else { //������ �ѱ��� �ϼ�
            //_makeHangul(i-1);

            _makeHangul(i, false, i - 1); //�ʼ� �λ� 
            complete_index = i - 1; //�ʼ� ��ġ�� index ����

            stage = 1; // �� ������ �ʼ��� �ǰ� �߼����� ����
          }
        } else if (_isCho(code)) { // �ʼ��̸� �ѱ��� �ϼ�.
          _makeHangul(i-1);
          _makeHangul(i, false);
          stage = 1; //�� ���ڰ� �ʼ��̵ǹǷ� �߼����� ����
        } else if (_isJung(code)) { // �߼��̸� ���� ������ �� �߼��� �������� �� ���ڴ� ��ħ�� ����.
          _addBS();
          _makeHangul(i-2);
          _makeHangul(i, false, i - 2);
          //has_hangul_to_flush = true;
          stage = 2;
        }
      } else if (stage == 4) { // �߼��� �ϳ� �� ����
        if (_isJung(code)) { //�߼��� �� ���
          if(_isJungJoinable(previous_code, code)) { //���� �߼��� ������ �� �ִ� ���
            _makeHangul(i);
            stage = 0;
          } else { //�߼��� ������ ����ġ�� ���. �¤� ����
            _makeHangul(i-1);
          }
        } else { // �ƴϸ� ������ �� ���.
          _makeHangul(i-1);
          stage = 1;
        }
      } else if (stage == 5) { // �ʼ��� �����ؼ� �ΰ� �� ���� ��
        if (_isJung(code)) { //�̹��� �߼��̸� ���� 
          _makeHangul(i-2);
          stage = 2;
        } else { 
          _makeHangul(i-1);
          stage = 1;
        }
      }
      previous_code = code;
    }
    //_makeHangul(i-1);
    return result.join(''); 
  };


  return {
    disassemble: disassemble,
    typewrite: typewrite
  };
})();


