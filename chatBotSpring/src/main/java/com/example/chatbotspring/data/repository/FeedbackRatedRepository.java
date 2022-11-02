package com.example.chatbotspring.data.repository;

import com.example.chatbotspring.data.entities.FeedbackRated;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;

import java.util.List;

public interface FeedbackRatedRepository extends JpaRepository<FeedbackRated, Long> {
    @Query(value = "select f from FeedbackRated f")
    List<FeedbackRated> getAll();
}