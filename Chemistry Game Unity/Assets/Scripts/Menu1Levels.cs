using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.SceneManagement;

public class Menu1Levels : MonoBehaviour
{
	public void Level1()
	{
		SceneManager.LoadScene("Level_1.1");
	}
    public void Level2()
	{
		SceneManager.LoadScene("Level_1.2");
	}
	public void Level3()
	{
		SceneManager.LoadScene("Level_1.3");
	}
	public void Level2_1()
	{
		SceneManager.LoadScene("Level_2.1");
	}
	public void Level2_2()
	{
		SceneManager.LoadScene("Level_2.2");
	}
	public void Level2_3()
	{
		SceneManager.LoadScene("Level_2.3");
	}
}
