using TMPro;
﻿using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using UnityEngine;
using UnityEngine.UI;
using UnityEngine.SceneManagement;

public class ExitLevel : MonoBehaviour
{

    public void backToMenu()
    {
        SceneManager.LoadScene("Main_Menu_1");
    }
}
